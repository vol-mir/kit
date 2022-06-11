<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210516022946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE material_norms (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, norm_document_id BIGINT UNSIGNED DEFAULT NULL, product_id BIGINT UNSIGNED DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, main_replacement TINYINT(1) NOT NULL, INDEX IDX_9BA8FC7847477769 (norm_document_id), INDEX IDX_9BA8FC784584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE material_norms ADD CONSTRAINT FK_9BA8FC7847477769 FOREIGN KEY (norm_document_id) REFERENCES norm_documents (id)');
        $this->addSql('ALTER TABLE material_norms ADD CONSTRAINT FK_9BA8FC784584665A FOREIGN KEY (product_id) REFERENCES products (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE material_norms');
    }
}
