<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210515065713 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE norm_documents ADD rendition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE norm_documents ADD CONSTRAINT FK_E0E9D3B2FD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('CREATE INDEX IDX_E0E9D3B2FD656AA1 ON norm_documents (rendition_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE norm_documents DROP FOREIGN KEY FK_E0E9D3B2FD656AA1');
        $this->addSql('DROP INDEX IDX_E0E9D3B2FD656AA1 ON norm_documents');
        $this->addSql('ALTER TABLE norm_documents DROP rendition_id');
    }
}
