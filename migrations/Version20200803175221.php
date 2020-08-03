<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200803175221 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attribute (id INT AUTO_INCREMENT NOT NULL, attribute_group_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_FA7AEFFB62D643B7 (attribute_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attribute_group (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity (id INT AUTO_INCREMENT NOT NULL, entity_type_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price NUMERIC(10, 2) NOT NULL, INDEX IDX_E2844685681BEB0 (entity_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entity_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE value (id INT AUTO_INCREMENT NOT NULL, entity_id INT DEFAULT NULL, attribute_id INT DEFAULT NULL, value LONGTEXT NOT NULL, INDEX IDX_1D77583481257D5D (entity_id), INDEX IDX_1D775834B6E62EFA (attribute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attribute ADD CONSTRAINT FK_FA7AEFFB62D643B7 FOREIGN KEY (attribute_group_id) REFERENCES attribute_group (id)');
        $this->addSql('ALTER TABLE entity ADD CONSTRAINT FK_E2844685681BEB0 FOREIGN KEY (entity_type_id) REFERENCES entity_type (id)');
        $this->addSql('ALTER TABLE value ADD CONSTRAINT FK_1D77583481257D5D FOREIGN KEY (entity_id) REFERENCES entity (id)');
        $this->addSql('ALTER TABLE value ADD CONSTRAINT FK_1D775834B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attribute (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE value DROP FOREIGN KEY FK_1D775834B6E62EFA');
        $this->addSql('ALTER TABLE attribute DROP FOREIGN KEY FK_FA7AEFFB62D643B7');
        $this->addSql('ALTER TABLE value DROP FOREIGN KEY FK_1D77583481257D5D');
        $this->addSql('ALTER TABLE entity DROP FOREIGN KEY FK_E2844685681BEB0');
        $this->addSql('DROP TABLE attribute');
        $this->addSql('DROP TABLE attribute_group');
        $this->addSql('DROP TABLE entity');
        $this->addSql('DROP TABLE entity_type');
        $this->addSql('DROP TABLE value');
    }
}
