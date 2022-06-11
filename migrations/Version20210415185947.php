<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210415185947 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE structure_replacement (id INT AUTO_INCREMENT NOT NULL, structure_main_id BIGINT UNSIGNED DEFAULT NULL, structure_replacement_id BIGINT UNSIGNED DEFAULT NULL, INDEX IDX_C583D6E9B9DCD7BB (structure_main_id), INDEX IDX_C583D6E963A19ED9 (structure_replacement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE structure_replacement ADD CONSTRAINT FK_C583D6E9B9DCD7BB FOREIGN KEY (structure_main_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structure_replacement ADD CONSTRAINT FK_C583D6E963A19ED9 FOREIGN KEY (structure_replacement_id) REFERENCES structures (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE structure_replacement');
    }
}
