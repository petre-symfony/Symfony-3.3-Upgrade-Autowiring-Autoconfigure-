<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20160207083337 extends AbstractMigration {
  public function up(Schema $schema){
    // this up() migration is autogenerated, please modify it to your needs
    $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

    $this->addSql("ALTER TABLE genus CHANGE fun_fact fun_fact VARCHAR(255) DEFAULT NULL");
  }

  public function down(Schema $schema){
    // this down() migration is autogenerated, please modify it to your needs
    $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

    $this->addSql("ALTER TABLE genus CHANGE fun_fact fun_fact VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci");
  }
}
