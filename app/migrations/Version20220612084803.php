<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220612084803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analytic_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calculations (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comments (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name_entity VARCHAR(190) DEFAULT NULL, id_entity BIGINT DEFAULT NULL, description LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_5F9E962AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departments (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, parent_id BIGINT UNSIGNED DEFAULT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, sorting_pdo INT DEFAULT NULL, id_pdo INT DEFAULT NULL, number_department VARCHAR(190) DEFAULT NULL, number_area VARCHAR(190) DEFAULT NULL, INDEX IDX_16AEB8D4727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finance_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE material_norm_replacement (id INT AUTO_INCREMENT NOT NULL, material_norm_main_id BIGINT UNSIGNED DEFAULT NULL, material_norm_replacement_id BIGINT UNSIGNED DEFAULT NULL, INDEX IDX_2AE935C15B66254F (material_norm_main_id), INDEX IDX_2AE935C18DCBA107 (material_norm_replacement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE material_norms (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, norm_document_id BIGINT UNSIGNED DEFAULT NULL, product_id BIGINT UNSIGNED DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, main_replacement TINYINT(1) NOT NULL, INDEX IDX_9BA8FC7847477769 (norm_document_id), INDEX IDX_9BA8FC784584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE norm_documents (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, product_id BIGINT UNSIGNED NOT NULL, rendition_id INT DEFAULT NULL, user_id INT DEFAULT NULL, name VARCHAR(190) DEFAULT NULL, status INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, date_document DATETIME DEFAULT NULL, close INT DEFAULT NULL, id_avt INT DEFAULT NULL, INDEX IDX_E0E9D3B24584665A (product_id), INDEX IDX_E0E9D3B2FD656AA1 (rendition_id), INDEX IDX_E0E9D3B2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, id_erp VARCHAR(190) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_groups (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, id_erp VARCHAR(190) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_kinds (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, id_erp VARCHAR(190) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_types (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE production_plans (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, id_erp VARCHAR(250) DEFAULT NULL, date_erp DATETIME DEFAULT NULL, account_type INT NOT NULL, date_begin DATETIME DEFAULT NULL, date_end DATETIME DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_2F665CE7A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, unit_id BIGINT UNSIGNED DEFAULT NULL, product_group_id INT DEFAULT NULL, product_kind_id INT DEFAULT NULL, product_type_id INT DEFAULT NULL, product_category_id INT DEFAULT NULL, calculation_id INT DEFAULT NULL, finance_group_id INT DEFAULT NULL, analytic_group_id INT DEFAULT NULL, name VARCHAR(190) NOT NULL, designation VARCHAR(190) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, weight DOUBLE PRECISION DEFAULT \'0\', intype INT UNSIGNED NOT NULL, profile_name VARCHAR(190) DEFAULT NULL, profile VARCHAR(190) DEFAULT NULL, profile_standard VARCHAR(190) DEFAULT NULL, mark VARCHAR(190) DEFAULT NULL, mark_standard VARCHAR(190) DEFAULT NULL, material_kind VARCHAR(190) DEFAULT NULL, id_avt INT DEFAULT NULL, type_avt VARCHAR(190) DEFAULT NULL, name_short VARCHAR(190) DEFAULT NULL, standard VARCHAR(190) DEFAULT NULL, name_maz VARCHAR(190) DEFAULT NULL, designation_maz VARCHAR(190) DEFAULT NULL, length_product DOUBLE PRECISION DEFAULT NULL, id_pdo INT DEFAULT NULL, id_erp VARCHAR(250) DEFAULT NULL, INDEX IDX_B3BA5A5AF8BD700D (unit_id), INDEX IDX_B3BA5A5A35E4B3D0 (product_group_id), INDEX IDX_B3BA5A5AE1B93719 (product_kind_id), INDEX IDX_B3BA5A5A14959723 (product_type_id), INDEX IDX_B3BA5A5ABE6903FD (product_category_id), INDEX IDX_B3BA5A5ACE3D4B33 (calculation_id), INDEX IDX_B3BA5A5A2F022C5A (finance_group_id), INDEX IDX_B3BA5A5A447BC573 (analytic_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kd_products_materials (product_source BIGINT UNSIGNED NOT NULL, product_target BIGINT UNSIGNED NOT NULL, INDEX IDX_AE8C46413DF63ED7 (product_source), INDEX IDX_AE8C464124136E58 (product_target), PRIMARY KEY(product_source, product_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE renditions (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specifications (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, product_id BIGINT UNSIGNED NOT NULL, rendition_id INT DEFAULT NULL, user_id INT DEFAULT NULL, name VARCHAR(190) DEFAULT NULL, status INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, date_specification DATETIME DEFAULT NULL, id_avt INT DEFAULT NULL, close INT DEFAULT NULL, INDEX IDX_BDA8A4B4584665A (product_id), INDEX IDX_BDA8A4BFD656AA1 (rendition_id), INDEX IDX_BDA8A4BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structure_replacement (id INT AUTO_INCREMENT NOT NULL, structure_main_id BIGINT UNSIGNED DEFAULT NULL, structure_replacement_id BIGINT UNSIGNED DEFAULT NULL, INDEX IDX_C583D6E9B9DCD7BB (structure_main_id), INDEX IDX_C583D6E963A19ED9 (structure_replacement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE structures (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, specification_id BIGINT UNSIGNED DEFAULT NULL, product_id BIGINT UNSIGNED DEFAULT NULL, format INT UNSIGNED DEFAULT NULL, area VARCHAR(190) DEFAULT NULL, position INT DEFAULT NULL, amount DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, main_replacement TINYINT(1) NOT NULL, comment LONGTEXT DEFAULT NULL, INDEX IDX_5BBEC55A908E2FFE (specification_id), INDEX IDX_5BBEC55A4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technological_operations (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(190) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, code_operation VARCHAR(190) DEFAULT NULL, type_operation VARCHAR(190) DEFAULT NULL, code_type_operation VARCHAR(190) DEFAULT NULL, note LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE track_documents (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, product_id BIGINT UNSIGNED NOT NULL, user_id INT DEFAULT NULL, rendition_id INT DEFAULT NULL, name VARCHAR(190) DEFAULT NULL, status INT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, date_start DATETIME DEFAULT NULL, date_end DATETIME DEFAULT NULL, close INT DEFAULT NULL, INDEX IDX_A308DC7C4584665A (product_id), INDEX IDX_A308DC7CA76ED395 (user_id), INDEX IDX_A308DC7CFD656AA1 (rendition_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tracks (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, department_id BIGINT UNSIGNED DEFAULT NULL, track_document_id BIGINT UNSIGNED DEFAULT NULL, technological_operation_id BIGINT UNSIGNED DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, index_number INT NOT NULL, time_cycle DOUBLE PRECISION DEFAULT NULL, time_processing DOUBLE PRECISION DEFAULT NULL, time_piece DOUBLE PRECISION DEFAULT NULL, number_operation VARCHAR(190) DEFAULT NULL, INDEX IDX_246D2A2EAE80F5DF (department_id), INDEX IDX_246D2A2E8281D3D9 (track_document_id), INDEX IDX_246D2A2E8CBD020D (technological_operation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE units (id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, name VARCHAR(190) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, id_erp VARCHAR(250) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(190) DEFAULT NULL, last_name VARCHAR(190) DEFAULT NULL, middle_name VARCHAR(190) DEFAULT NULL, department INT UNSIGNED DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE departments ADD CONSTRAINT FK_16AEB8D4727ACA70 FOREIGN KEY (parent_id) REFERENCES departments (id)');
        $this->addSql('ALTER TABLE material_norm_replacement ADD CONSTRAINT FK_2AE935C15B66254F FOREIGN KEY (material_norm_main_id) REFERENCES material_norms (id)');
        $this->addSql('ALTER TABLE material_norm_replacement ADD CONSTRAINT FK_2AE935C18DCBA107 FOREIGN KEY (material_norm_replacement_id) REFERENCES material_norms (id)');
        $this->addSql('ALTER TABLE material_norms ADD CONSTRAINT FK_9BA8FC7847477769 FOREIGN KEY (norm_document_id) REFERENCES norm_documents (id)');
        $this->addSql('ALTER TABLE material_norms ADD CONSTRAINT FK_9BA8FC784584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE norm_documents ADD CONSTRAINT FK_E0E9D3B24584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE norm_documents ADD CONSTRAINT FK_E0E9D3B2FD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('ALTER TABLE norm_documents ADD CONSTRAINT FK_E0E9D3B2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE production_plans ADD CONSTRAINT FK_2F665CE7A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AF8BD700D FOREIGN KEY (unit_id) REFERENCES units (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A35E4B3D0 FOREIGN KEY (product_group_id) REFERENCES product_groups (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5AE1B93719 FOREIGN KEY (product_kind_id) REFERENCES product_kinds (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A14959723 FOREIGN KEY (product_type_id) REFERENCES product_types (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5ABE6903FD FOREIGN KEY (product_category_id) REFERENCES product_categories (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5ACE3D4B33 FOREIGN KEY (calculation_id) REFERENCES calculations (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A2F022C5A FOREIGN KEY (finance_group_id) REFERENCES finance_groups (id)');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A447BC573 FOREIGN KEY (analytic_group_id) REFERENCES analytic_groups (id)');
        $this->addSql('ALTER TABLE kd_products_materials ADD CONSTRAINT FK_AE8C46413DF63ED7 FOREIGN KEY (product_source) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE kd_products_materials ADD CONSTRAINT FK_AE8C464124136E58 FOREIGN KEY (product_target) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4B4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4BFD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('ALTER TABLE specifications ADD CONSTRAINT FK_BDA8A4BA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE structure_replacement ADD CONSTRAINT FK_C583D6E9B9DCD7BB FOREIGN KEY (structure_main_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structure_replacement ADD CONSTRAINT FK_C583D6E963A19ED9 FOREIGN KEY (structure_replacement_id) REFERENCES structures (id)');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A908E2FFE FOREIGN KEY (specification_id) REFERENCES specifications (id)');
        $this->addSql('ALTER TABLE structures ADD CONSTRAINT FK_5BBEC55A4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7C4584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE track_documents ADD CONSTRAINT FK_A308DC7CFD656AA1 FOREIGN KEY (rendition_id) REFERENCES renditions (id)');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2EAE80F5DF FOREIGN KEY (department_id) REFERENCES departments (id)');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2E8281D3D9 FOREIGN KEY (track_document_id) REFERENCES track_documents (id)');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2E8CBD020D FOREIGN KEY (technological_operation_id) REFERENCES technological_operations (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A447BC573');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5ACE3D4B33');
        $this->addSql('ALTER TABLE departments DROP FOREIGN KEY FK_16AEB8D4727ACA70');
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2EAE80F5DF');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A2F022C5A');
        $this->addSql('ALTER TABLE material_norm_replacement DROP FOREIGN KEY FK_2AE935C15B66254F');
        $this->addSql('ALTER TABLE material_norm_replacement DROP FOREIGN KEY FK_2AE935C18DCBA107');
        $this->addSql('ALTER TABLE material_norms DROP FOREIGN KEY FK_9BA8FC7847477769');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5ABE6903FD');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A35E4B3D0');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AE1B93719');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5A14959723');
        $this->addSql('ALTER TABLE material_norms DROP FOREIGN KEY FK_9BA8FC784584665A');
        $this->addSql('ALTER TABLE norm_documents DROP FOREIGN KEY FK_E0E9D3B24584665A');
        $this->addSql('ALTER TABLE kd_products_materials DROP FOREIGN KEY FK_AE8C46413DF63ED7');
        $this->addSql('ALTER TABLE kd_products_materials DROP FOREIGN KEY FK_AE8C464124136E58');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4B4584665A');
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A4584665A');
        $this->addSql('ALTER TABLE track_documents DROP FOREIGN KEY FK_A308DC7C4584665A');
        $this->addSql('ALTER TABLE norm_documents DROP FOREIGN KEY FK_E0E9D3B2FD656AA1');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4BFD656AA1');
        $this->addSql('ALTER TABLE track_documents DROP FOREIGN KEY FK_A308DC7CFD656AA1');
        $this->addSql('ALTER TABLE structures DROP FOREIGN KEY FK_5BBEC55A908E2FFE');
        $this->addSql('ALTER TABLE structure_replacement DROP FOREIGN KEY FK_C583D6E9B9DCD7BB');
        $this->addSql('ALTER TABLE structure_replacement DROP FOREIGN KEY FK_C583D6E963A19ED9');
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2E8CBD020D');
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2E8281D3D9');
        $this->addSql('ALTER TABLE products DROP FOREIGN KEY FK_B3BA5A5AF8BD700D');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962AA76ED395');
        $this->addSql('ALTER TABLE norm_documents DROP FOREIGN KEY FK_E0E9D3B2A76ED395');
        $this->addSql('ALTER TABLE production_plans DROP FOREIGN KEY FK_2F665CE7A76ED395');
        $this->addSql('ALTER TABLE specifications DROP FOREIGN KEY FK_BDA8A4BA76ED395');
        $this->addSql('ALTER TABLE track_documents DROP FOREIGN KEY FK_A308DC7CA76ED395');
        $this->addSql('DROP TABLE analytic_groups');
        $this->addSql('DROP TABLE calculations');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE departments');
        $this->addSql('DROP TABLE finance_groups');
        $this->addSql('DROP TABLE material_norm_replacement');
        $this->addSql('DROP TABLE material_norms');
        $this->addSql('DROP TABLE norm_documents');
        $this->addSql('DROP TABLE product_categories');
        $this->addSql('DROP TABLE product_groups');
        $this->addSql('DROP TABLE product_kinds');
        $this->addSql('DROP TABLE product_types');
        $this->addSql('DROP TABLE production_plans');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE kd_products_materials');
        $this->addSql('DROP TABLE renditions');
        $this->addSql('DROP TABLE specifications');
        $this->addSql('DROP TABLE structure_replacement');
        $this->addSql('DROP TABLE structures');
        $this->addSql('DROP TABLE technological_operations');
        $this->addSql('DROP TABLE track_documents');
        $this->addSql('DROP TABLE tracks');
        $this->addSql('DROP TABLE units');
        $this->addSql('DROP TABLE users');
    }
}
