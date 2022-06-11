<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211002122817 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analytic_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finance_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD finance_group_id INT DEFAULT NULL, ADD analytic_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A2F022C5A FOREIGN KEY (finance_group_id) REFERENCES finance_groups (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A447BC573 FOREIGN KEY (analytic_group_id) REFERENCES analytic_groups (id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A2F022C5A ON products (finance_group_id)');
        $this->addSql('CREATE INDEX IDX_B3BA5A5A447BC573 ON products (analytic_group_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A447BC573');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A2F022C5A');
        $this->addSql('DROP TABLE analytic_groups');
        $this->addSql('DROP TABLE finance_groups');
        $this->addSql('DROP INDEX IDX_B3BA5A5A2F022C5A ON products');
        $this->addSql('DROP INDEX IDX_B3BA5A5A447BC573 ON products');
        $this->addSql('ALTER TABLE products DROP finance_group_id, DROP analytic_group_id');
    }
}
