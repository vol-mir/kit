<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210612052913 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departments (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, parent_id BIGINT UNSIGNED DEFAULT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, sorting_pdo INT DEFAULT NULL, INDEX IDX_16AEB8D4727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE track_documents (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, product_id BIGINT UNSIGNED NOT NULL, user_id INT DEFAULT NULL, rendition_id INT DEFAULT NULL, name VARCHAR(190) DEFAULT NULL, status INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, date_start DATETIME DEFAULT NULL, date_end DATETIME DEFAULT NULL, close INT DEFAULT NULL, INDEX IDX_A308DC7C4584665A (product_id), INDEX IDX_A308DC7CA76ED395 (user_id), INDEX IDX_A308DC7CFD656AA1 (rendition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tracks (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, department_id BIGINT UNSIGNED DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, INDEX IDX_246D2A2EAE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departments ADD CONSTRAINT FK_16AEB8D4727ACA70 FOREIGN KEY (parent_id) REFERENCES departments (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7C4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7CFD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2EAE80F5DF FOREIGN KEY (department_id) REFERENCES departments (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departments DROP FOREIGN KEY FK_16AEB8D4727ACA70');
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2EAE80F5DF');
        $this->addSql('DROP TABLE departments');
        $this->addSql('DROP TABLE track_documents');
        $this->addSql('DROP TABLE tracks');
    }
}
