<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210523150752 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE norm_documents ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE norm_documents ADD CONSTRAINT FK_E0E9D3B2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_E0E9D3B2A76ED395 ON norm_documents (user_id)');
        $this->addSql('ALTER TABLE specifications ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4BA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_BDA8A4BA76ED395 ON specifications (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE norm_documents DROP FOREIGN KEY FK_E0E9D3B2A76ED395');
        $this->addSql('DROP INDEX IDX_E0E9D3B2A76ED395 ON norm_documents');
        $this->addSql('ALTER TABLE norm_documents DROP user_id');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4BA76ED395');
        $this->addSql('DROP INDEX IDX_BDA8A4BA76ED395 ON specifications');
        $this->addSql('ALTER TABLE specifications DROP user_id');
    }
}
