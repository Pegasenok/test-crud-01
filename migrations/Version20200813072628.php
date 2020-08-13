<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813072628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entity_type_attribute_group (entity_type_id INT NOT NULL, attribute_group_id INT NOT NULL, INDEX IDX_CFCBEE3A5681BEB0 (entity_type_id), INDEX IDX_CFCBEE3A62D643B7 (attribute_group_id), PRIMARY KEY(entity_type_id, attribute_group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entity_type_attribute_group ADD CONSTRAINT FK_CFCBEE3A5681BEB0 FOREIGN KEY (entity_type_id) REFERENCES entity_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entity_type_attribute_group ADD CONSTRAINT FK_CFCBEE3A62D643B7 FOREIGN KEY (attribute_group_id) REFERENCES attribute_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE attribute_group ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE entity_type CHANGE type name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE entity_type_attribute_group');
        $this->addSql('ALTER TABLE attribute_group DROP name');
        $this->addSql('ALTER TABLE entity_type CHANGE name type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
