<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210613114752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departments ADD number_department VARCHAR(190) DEFAULT NULL, ADD number_area VARCHAR(190) DEFAULT NULL');
        $this->addSql('ALTER TABLE tracks ADD track_document_id BIGINT UNSIGNED DEFAULT NULL');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2E8281D3D9 FOREIGN KEY (track_document_id) REFERENCES track_documents (id)');
        $this->addSql('CREATE INDEX IDX_246D2A2E8281D3D9 ON tracks (track_document_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departments DROP number_department, DROP number_area');
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2E8281D3D9');
        $this->addSql('DROP INDEX IDX_246D2A2E8281D3D9 ON tracks');
        $this->addSql('ALTER TABLE tracks DROP track_document_id');
    }
}
