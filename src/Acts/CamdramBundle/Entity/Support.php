<?php

namespace Acts\CamdramBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActsSupport
 *
 * @ORM\Table(name="acts_support")
 * @ORM\Entity
 */
class Support
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="supportid", type="integer", nullable=false)
     */
    private $supportid;

    /**
     * @var string
     *
     * @ORM\Column(name="from", type="text", nullable=false)
     */
    private $from;

    /**
     * @var string
     *
     * @ORM\Column(name="to", type="text", nullable=false)
     */
    private $to;

    /**
     * @var string
     *
     * @ORM\Column(name="cc", type="text", nullable=false)
     */
    private $cc;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="text", nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var integer
     *
     * @ORM\Column(name="ownerid", type="integer", nullable=false)
     */
    private $ownerid;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime", nullable=false)
     */
    private $datetime;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set supportid
     *
     * @param integer $supportid
     * @return ActsSupport
     */
    public function setSupportid($supportid)
    {
        $this->supportid = $supportid;
    
        return $this;
    }

    /**
     * Get supportid
     *
     * @return integer 
     */
    public function getSupportid()
    {
        return $this->supportid;
    }

    /**
     * Set from
     *
     * @param string $from
     * @return ActsSupport
     */
    public function setFrom($from)
    {
        $this->from = $from;
    
        return $this;
    }

    /**
     * Get from
     *
     * @return string 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param string $to
     * @return ActsSupport
     */
    public function setTo($to)
    {
        $this->to = $to;
    
        return $this;
    }

    /**
     * Get to
     *
     * @return string 
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set cc
     *
     * @param string $cc
     * @return ActsSupport
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    
        return $this;
    }

    /**
     * Get cc
     *
     * @return string 
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return ActsSupport
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return ActsSupport
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set ownerid
     *
     * @param integer $ownerid
     * @return ActsSupport
     */
    public function setOwnerid($ownerid)
    {
        $this->ownerid = $ownerid;
    
        return $this;
    }

    /**
     * Get ownerid
     *
     * @return integer 
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return ActsSupport
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     * @return ActsSupport
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    
        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}