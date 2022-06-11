<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210408060353 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product_categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_kinds (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, unit_id BIGINT UNSIGNED DEFAULT NULL, product_group_id INT DEFAULT NULL, product_kind_id INT DEFAULT NULL, product_type_id INT DEFAULT NULL, product_category_id INT DEFAULT NULL, name VARCHAR(190) NOT NULL, designation VARCHAR(190) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, weight DOUBLE PRECISION DEFAULT \'0\', intype INT UNSIGNED NOT NULL, profile_name VARCHAR(190) DEFAULT NULL, profile VARCHAR(190) DEFAULT NULL, profile_standard VARCHAR(190) DEFAULT NULL, mark VARCHAR(190) DEFAULT NULL, mark_standard VARCHAR(190) DEFAULT NULL, material_kind VARCHAR(190) DEFAULT NULL, id_avt INT DEFAULT NULL, type_avt VARCHAR(190) DEFAULT NULL, INDEX IDX_B3BA5A5AF8BD700D (unit_id), INDEX IDX_B3BA5A5A35E4B3D0 (product_group_id), INDEX IDX_B3BA5A5AE1B93719 (product_kind_id), INDEX IDX_B3BA5A5A14959723 (product_type_id), INDEX IDX_B3BA5A5ABE6903FD (product_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE renditions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specifications (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, product_id BIGINT UNSIGNED NOT NULL, rendition_id INT DEFAULT NULL, name VARCHAR(190) DEFAULT NULL, status INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, date_specification DATETIME DEFAULT NULL, INDEX IDX_BDA8A4B4584665A (product_id), INDEX IDX_BDA8A4BFD656AA1 (rendition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structures (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, specification_id BIGINT UNSIGNED DEFAULT NULL, product_id BIGINT UNSIGNED DEFAULT NULL, format INT UNSIGNED DEFAULT NULL, area VARCHAR(190) DEFAULT NULL, position INT DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, INDEX IDX_5BBEC55A908E2FFE (specification_id), INDEX IDX_5BBEC55A4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE units (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AF8BD700D FOREIGN KEY (unit_id) REFERENCES units (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A35E4B3D0 FOREIGN KEY (product_group_id) REFERENCES product_groups (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AE1B93719 FOREIGN KEY (product_kind_id) REFERENCES product_kinds (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A14959723 FOREIGN KEY (product_type_id) REFERENCES product_types (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5ABE6903FD FOREIGN KEY (product_category_id) REFERENCES product_categories (id)');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4B4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4BFD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A908E2FFE FOREIGN KEY (specification_id) REFERENCES specifications (id)');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5ABE6903FD');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A35E4B3D0');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AE1B93719');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A14959723');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4B4584665A');
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A4584665A');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4BFD656AA1');
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A908E2FFE');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AF8BD700D');
        $this->addSql('DROP TABLE product_categories');
        $this->addSql('DROP TABLE product_groups');
        $this->addSql('DROP TABLE product_kinds');
        $this->addSql('DROP TABLE product_types');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE renditions');
        $this->addSql('DROP TABLE specifications');
        $this->addSql('DROP TABLE structures');
        $this->addSql('DROP TABLE units');
    }
}
