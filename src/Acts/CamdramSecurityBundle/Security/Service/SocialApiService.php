<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acts\CamdramSecurityBundle\Security\Service;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Buzz\Client\ClientInterface as HttpClientInterface;

use Symfony\Component\Security\Core\Exception\AuthenticationException,
    Symfony\Component\Security\Http\HttpUtils,
    Symfony\Component\HttpFoundation\Request;

class SocialApiService extends AbstractService
{
    /**
     * {@inheritDoc}
     */
    public function getUserInfo($accessToken = null)
    {
        $url = $this->getOption('info_url');
        $url .= (false !== strpos($url, '?') ? '&' : '?').http_build_query(array(
            'access_token' => $accessToken
        ));

        $response = $this->doGetUserInformationRequest($url)->getContent();
        $content = json_decode($response, true);

        return $this->parseUserInfo($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorizationUrl($redirectUri, array $extraParameters = array())
    {
        $parameters = array_merge($extraParameters, array(
            'response_type' => 'code',
            'client_id'     => $this->getOption('client_id'),
            'scope'         => $this->getOption('scope'),
            'redirect_uri'  => $redirectUri,
        ));

        return $this->getOption('authorization_url').'?'.http_build_query($parameters);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessToken(Request $request, $redirectUri, array $extraParameters = array())
    {
        $parameters = array_merge($extraParameters, array(
            'code'          => $request->query->get('code'),
            'grant_type'    => 'authorization_code',
            'client_id'     => $this->getOption('client_id'),
            'client_secret' => $this->getOption('client_secret'),
            'redirect_uri'  => $redirectUri,
        ));

        $response = $this->doGetAccessTokenRequest($this->getOption('access_token_url'), $parameters);
        $response = $this->getResponseContent($response);

        if (isset($response['error'])) {
            throw new AuthenticationException(sprintf('OAuth error: "%s"', $response['error']));
        }

        if (!isset($response['access_token'])) {
            throw new AuthenticationException('Not a valid access token.');
        }

        return $response['access_token'];
    }

    /**
     * {@inheritDoc}
     */
    public function handles(Request $request)
    {
        return $request->query->has('code');
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetAccessTokenRequest($url, array $parameters = array())
    {
        return $this->httpRequest($url, http_build_query($parameters));
    }

    /**
     * {@inheritDoc}
     */
    protected function doGetUserInformationRequest($url, array $parameters = array())
    {
        return $this->httpRequest($url);
    }
}