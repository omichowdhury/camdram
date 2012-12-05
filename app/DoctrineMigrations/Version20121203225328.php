<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify `to` your need!
 */
class Version20121203225328 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it `to` your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE acts_shows_people_link CHANGE sid sid INT NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE `order` `order` INT NOT NULL, CHANGE pid pid INT NOT NULL");
        //$this->addSql("DROP INDEX `to` ON footprints");
        $this->addSql("ALTER TABLE footprints CHANGE `from` `from` INT AUTO_INCREMENT NOT NULL, CHANGE `to` `to` INT NOT NULL, CHANGE time time INT NOT NULL");
        $this->addSql("ALTER TABLE acts_catalogue CHANGE storeid storeid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_email_aliases CHANGE uid uid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_mailinglists_members CHANGE listid listid INT NOT NULL, CHANGE uid uid INT NOT NULL");
        $this->addSql("DROP INDEX showid ON acts_techies");
        $this->addSql("ALTER TABLE acts_techies CHANGE showid showid INT NOT NULL, CHANGE deadline deadline TINYINT(1) NOT NULL, CHANGE expiry expiry DATE NOT NULL, CHANGE display display TINYINT(1) NOT NULL, CHANGE remindersent remindersent TINYINT(1) NOT NULL, CHANGE lastupdated lastupdated DATETIME NOT NULL");
        $this->addSql("DROP INDEX id ON acts_events");
        $this->addSql("ALTER TABLE acts_events CHANGE endtime endtime TIME NOT NULL, CHANGE starttime starttime TIME NOT NULL, CHANGE date date DATE NOT NULL, CHANGE linkid linkid INT NOT NULL, CHANGE socid socid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_people_data CHANGE mapto mapto INT NOT NULL, CHANGE norobots norobots TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_knowledgebase CHANGE pageid pageid INT NOT NULL, CHANGE userid userid INT NOT NULL, CHANGE date date DATETIME NOT NULL");
        $this->addSql("DROP INDEX keyword ON acts_search_cache");
        $this->addSql("ALTER TABLE acts_search_cache CHANGE obsolete obsolete TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_email CHANGE userid userid INT NOT NULL, CHANGE public_add public_add TINYINT(1) NOT NULL, CHANGE `from` `from` INT NOT NULL, CHANGE deleteonsend deleteonsend TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_reviews CHANGE showid showid INT NOT NULL, CHANGE uid uid INT NOT NULL, CHANGE created created DATETIME NOT NULL");
        $this->addSql("ALTER TABLE acts_forums_messages CHANGE replyid replyid INT NOT NULL, CHANGE forumid forumid INT NOT NULL, CHANGE uid uid INT NOT NULL, CHANGE datetime datetime DATETIME NOT NULL, CHANGE resourceid resourceid INT NOT NULL, CHANGE ancestorid ancestorid INT NOT NULL, CHANGE lastpost lastpost DATETIME NOT NULL");
        $this->addSql("ALTER TABLE acts_pendingaccess CHANGE rid rid INT NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE issuerid issuerid INT NOT NULL, CHANGE creationdate creationdate DATE NOT NULL");
        $this->addSql("ALTER TABLE acts_pages CHANGE parentid parentid INT NOT NULL, CHANGE sortcode sortcode INT NOT NULL, CHANGE secure secure TINYINT(1) NOT NULL, CHANGE micro micro TINYINT(1) NOT NULL, CHANGE ghost ghost TINYINT(1) NOT NULL, CHANGE mode mode VARCHAR(255) DEFAULT NULL, CHANGE allowsubpage allowsubpage INT NOT NULL, CHANGE knowledgebase knowledgebase TINYINT(1) NOT NULL, CHANGE kbid kbid INT NOT NULL, CHANGE locked locked TINYINT(1) NOT NULL, CHANGE virtual virtual TINYINT(1) NOT NULL, CHANGE param_parser param_parser TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_societies CHANGE type type TINYINT(1) NOT NULL, CHANGE affiliate affiliate TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_keywords CHANGE pageid pageid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_forums CHANGE orderid orderid INT NOT NULL");
        $this->addSql("DROP INDEX id ON acts_access");
        $this->addSql("ALTER TABLE acts_access CHANGE rid rid INT NOT NULL, CHANGE uid uid INT NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE issuerid issuerid INT NOT NULL, CHANGE creationdate creationdate DATE NOT NULL, CHANGE revokeid revokeid INT NOT NULL, CHANGE revokedate revokedate DATE NOT NULL, CHANGE contact contact TINYINT(1) NOT NULL");
        $this->addSql("DROP INDEX token ON acts_authtokens");
        $this->addSql("ALTER TABLE acts_techies_positions CHANGE orderid orderid DOUBLE PRECISION NOT NULL");
        $this->addSql("ALTER TABLE acts_performances CHANGE sid sid INT NOT NULL, CHANGE startdate startdate DATE NOT NULL, CHANGE enddate enddate DATE NOT NULL, CHANGE excludedate excludedate DATE NOT NULL, CHANGE time time TIME NOT NULL, CHANGE venid venid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_email_items CHANGE emailid emailid INT NOT NULL, CHANGE orderid orderid DOUBLE PRECISION NOT NULL, CHANGE creatorid creatorid INT NOT NULL, CHANGE created created DATETIME NOT NULL, CHANGE protect protect TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_support CHANGE supportid supportid INT NOT NULL, CHANGE ownerid ownerid INT NOT NULL, CHANGE state state VARCHAR(255) NOT NULL, CHANGE datetime datetime DATETIME NOT NULL");
        $this->addSql("ALTER TABLE acts_users CHANGE registered registered DATE NOT NULL, CHANGE login login DATE NOT NULL, CHANGE contact contact TINYINT(1) NOT NULL, CHANGE alumni alumni TINYINT(1) NOT NULL, CHANGE publishemail publishemail TINYINT(1) NOT NULL, CHANGE forumnotify forumnotify TINYINT(1) NOT NULL, CHANGE dbemail dbemail TINYINT(1) NOT NULL, CHANGE dbphone dbphone TINYINT(1) NOT NULL, CHANGE threadmessages threadmessages TINYINT(1) NOT NULL, CHANGE reversetime reversetime TINYINT(1) NOT NULL");
        $this->addSql("ALTER TABLE acts_email_sigs CHANGE uid uid INT NOT NULL");
        $this->addSql("ALTER TABLE acts_termdates CHANGE startdate startdate DATE NOT NULL, CHANGE enddate enddate DATE NOT NULL, CHANGE firstweek firstweek TINYINT(1) NOT NULL, CHANGE lastweek lastweek TINYINT(1) NOT NULL, CHANGE displayweek displayweek TINYINT(1) NOT NULL");
        $this->addSql("DROP INDEX id ON acts_shows");
        $this->addSql("DROP INDEX title ON acts_shows");
        $this->addSql("ALTER TABLE acts_shows CHANGE excludedate excludedate DATE NOT NULL, CHANGE techsend techsend TINYINT(1) NOT NULL, CHANGE actorsend actorsend TINYINT(1) NOT NULL, CHANGE socid socid INT NOT NULL, CHANGE venid venid INT NOT NULL, CHANGE authorizeid authorizeid INT NOT NULL, CHANGE entered entered TINYINT(1) NOT NULL, CHANGE entryexpiry entryexpiry DATE NOT NULL, CHANGE category category VARCHAR(255) NOT NULL, CHANGE primaryref primaryref INT NOT NULL, CHANGE timestamp timestamp DATETIME NOT NULL");
        $this->addSql("ALTER TABLE acts_config CHANGE name name VARCHAR(255) NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it `to` your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE acts_access CHANGE rid rid INT DEFAULT 0 NOT NULL, CHANGE uid uid INT DEFAULT 0 NOT NULL, CHANGE type type VARCHAR(255) DEFAULT 'show' NOT NULL, CHANGE issuerid issuerid INT DEFAULT 0 NOT NULL, CHANGE creationdate creationdate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE revokeid revokeid INT DEFAULT 0 NOT NULL, CHANGE revokedate revokedate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE contact contact TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("CREATE UNIQUE INDEX id ON acts_access (id)");
        $this->addSql("CREATE UNIQUE INDEX token ON acts_authtokens (token)");
        $this->addSql("ALTER TABLE acts_catalogue CHANGE storeid storeid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_config CHANGE name name VARCHAR(255) DEFAULT '' NOT NULL");
        $this->addSql("ALTER TABLE acts_email CHANGE userid userid INT DEFAULT 0 NOT NULL, CHANGE public_add public_add TINYINT(1) DEFAULT '0' NOT NULL, CHANGE `from` `from` INT DEFAULT 0 NOT NULL, CHANGE deleteonsend deleteonsend TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_email_aliases CHANGE uid uid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_email_items CHANGE emailid emailid INT DEFAULT 0 NOT NULL, CHANGE orderid orderid DOUBLE PRECISION DEFAULT '0' NOT NULL, CHANGE creatorid creatorid INT DEFAULT 0 NOT NULL, CHANGE created created DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, CHANGE protect protect TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_email_sigs CHANGE uid uid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_events CHANGE endtime endtime TIME DEFAULT '00:00:00' NOT NULL, CHANGE starttime starttime TIME DEFAULT '00:00:00' NOT NULL, CHANGE date date DATE DEFAULT '0000-00-00' NOT NULL, CHANGE linkid linkid INT DEFAULT 0 NOT NULL, CHANGE socid socid INT DEFAULT 0 NOT NULL");
        $this->addSql("CREATE UNIQUE INDEX id ON acts_events (id)");
        $this->addSql("ALTER TABLE acts_forums CHANGE orderid orderid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_forums_messages CHANGE replyid replyid INT DEFAULT 0 NOT NULL, CHANGE forumid forumid INT DEFAULT 0 NOT NULL, CHANGE uid uid INT DEFAULT 0 NOT NULL, CHANGE datetime datetime DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL, CHANGE resourceid resourceid INT DEFAULT 0 NOT NULL, CHANGE ancestorid ancestorid INT DEFAULT 0 NOT NULL, CHANGE lastpost lastpost DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL");
        $this->addSql("ALTER TABLE acts_keywords CHANGE pageid pageid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_knowledgebase CHANGE pageid pageid INT DEFAULT 0 NOT NULL, CHANGE userid userid INT DEFAULT 0 NOT NULL, CHANGE date date DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL");
        $this->addSql("ALTER TABLE acts_mailinglists_members CHANGE listid listid INT DEFAULT 0 NOT NULL, CHANGE uid uid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_pages CHANGE parentid parentid INT DEFAULT 0 NOT NULL, CHANGE sortcode sortcode INT DEFAULT 0 NOT NULL, CHANGE secure secure TINYINT(1) DEFAULT '0' NOT NULL, CHANGE micro micro TINYINT(1) DEFAULT '0' NOT NULL, CHANGE ghost ghost TINYINT(1) DEFAULT '0' NOT NULL, CHANGE mode mode VARCHAR(255) DEFAULT 'normal', CHANGE allowsubpage allowsubpage INT DEFAULT 0 NOT NULL, CHANGE knowledgebase knowledgebase TINYINT(1) DEFAULT '0' NOT NULL, CHANGE kbid kbid INT DEFAULT 0 NOT NULL, CHANGE locked locked TINYINT(1) DEFAULT '0' NOT NULL, CHANGE virtual virtual TINYINT(1) DEFAULT '0' NOT NULL, CHANGE param_parser param_parser TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_pendingaccess CHANGE rid rid INT DEFAULT 0 NOT NULL, CHANGE type type VARCHAR(255) DEFAULT 'show' NOT NULL, CHANGE issuerid issuerid INT DEFAULT 0 NOT NULL, CHANGE creationdate creationdate DATE DEFAULT '0000-00-00' NOT NULL");
        $this->addSql("ALTER TABLE acts_people_data CHANGE mapto mapto INT DEFAULT 0 NOT NULL, CHANGE norobots norobots TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_performances CHANGE sid sid INT DEFAULT 0 NOT NULL, CHANGE startdate startdate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE enddate enddate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE excludedate excludedate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE time time TIME DEFAULT '00:00:00' NOT NULL, CHANGE venid venid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_reviews CHANGE showid showid INT DEFAULT 0 NOT NULL, CHANGE uid uid INT DEFAULT 0 NOT NULL, CHANGE created created DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL");
        $this->addSql("ALTER TABLE acts_search_cache CHANGE obsolete obsolete TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("CREATE INDEX keyword ON acts_search_cache (keyword)");
        $this->addSql("ALTER TABLE acts_shows CHANGE excludedate excludedate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE techsend techsend TINYINT(1) DEFAULT '0' NOT NULL, CHANGE actorsend actorsend TINYINT(1) DEFAULT '0' NOT NULL, CHANGE socid socid INT DEFAULT 0 NOT NULL, CHANGE venid venid INT DEFAULT 0 NOT NULL, CHANGE authorizeid authorizeid INT DEFAULT 0 NOT NULL, CHANGE entered entered TINYINT(1) DEFAULT '0' NOT NULL, CHANGE entryexpiry entryexpiry DATE DEFAULT '0000-00-00' NOT NULL, CHANGE category category VARCHAR(255) DEFAULT 'other' NOT NULL, CHANGE primaryref primaryref INT DEFAULT 0 NOT NULL, CHANGE timestamp timestamp DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL");
        $this->addSql("CREATE UNIQUE INDEX id ON acts_shows (id)");
        $this->addSql("CREATE FULLTEXT INDEX title ON acts_shows (title)");
        $this->addSql("ALTER TABLE acts_shows_people_link CHANGE sid sid INT DEFAULT 0 NOT NULL, CHANGE type type VARCHAR(255) DEFAULT 'cast' NOT NULL, CHANGE `order` `order` INT DEFAULT 0 NOT NULL, CHANGE pid pid INT DEFAULT 0 NOT NULL");
        $this->addSql("ALTER TABLE acts_societies CHANGE type type TINYINT(1) DEFAULT '0' NOT NULL, CHANGE affiliate affiliate TINYINT(1) DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_support CHANGE supportid supportid INT DEFAULT 0 NOT NULL, CHANGE ownerid ownerid INT DEFAULT 0 NOT NULL, CHANGE state state VARCHAR(255) DEFAULT 'unassigned' NOT NULL, CHANGE datetime datetime DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL");
        $this->addSql("ALTER TABLE acts_techies CHANGE showid showid INT DEFAULT 0 NOT NULL, CHANGE deadline deadline TINYINT(1) DEFAULT '0' NOT NULL, CHANGE expiry expiry DATE DEFAULT '0000-00-00' NOT NULL, CHANGE display display TINYINT(1) DEFAULT '0' NOT NULL, CHANGE remindersent remindersent TINYINT(1) DEFAULT '0' NOT NULL, CHANGE lastupdated lastupdated DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL");
        $this->addSql("CREATE UNIQUE INDEX showid ON acts_techies (showid)");
        $this->addSql("ALTER TABLE acts_techies_positions CHANGE orderid orderid DOUBLE PRECISION DEFAULT '0' NOT NULL");
        $this->addSql("ALTER TABLE acts_termdates CHANGE startdate startdate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE enddate enddate DATE DEFAULT '0000-00-00' NOT NULL, CHANGE firstweek firstweek TINYINT(1) DEFAULT '0' NOT NULL, CHANGE lastweek lastweek TINYINT(1) DEFAULT '8' NOT NULL, CHANGE displayweek displayweek TINYINT(1) DEFAULT '1' NOT NULL");
        $this->addSql("ALTER TABLE acts_users CHANGE registered registered DATE DEFAULT '0000-00-00' NOT NULL, CHANGE login login DATE DEFAULT '0000-00-00' NOT NULL, CHANGE contact contact TINYINT(1) DEFAULT '1' NOT NULL, CHANGE alumni alumni TINYINT(1) DEFAULT '0' NOT NULL, CHANGE publishemail publishemail TINYINT(1) DEFAULT '0' NOT NULL, CHANGE forumnotify forumnotify TINYINT(1) DEFAULT '0' NOT NULL, CHANGE dbemail dbemail TINYINT(1) DEFAULT '0' NOT NULL, CHANGE dbphone dbphone TINYINT(1) DEFAULT '0' NOT NULL, CHANGE threadmessages threadmessages TINYINT(1) DEFAULT '0' NOT NULL, CHANGE reversetime reversetime TINYINT(1) DEFAULT '1' NOT NULL");
        $this->addSql("ALTER TABLE footprints CHANGE `from` `from` INT DEFAULT 0 NOT NULL, CHANGE `to` `to` INT DEFAULT 0 NOT NULL, CHANGE time time INT DEFAULT 0 NOT NULL");
        $this->addSql("CREATE INDEX `to` ON footprints (to)");
    }
}