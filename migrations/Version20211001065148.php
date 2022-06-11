<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211001065148 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE calculations (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD calculation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5ACE3D4B33 FOREIGN KEY (calculation_id) REFERENCES calculations (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5ACE3D4B33 ON products (calculation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5ACE3D4B33');
        $this->addSql('DROP TABLE calculations');
        $this->addSql('DROP INDEX IDX_B3BA5A5ACE3D4B33 ON products');
        $this->addSql('ALTER TABLE products DROP calculation_id');
    }
}
