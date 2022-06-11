<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210517183602 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE material_norm_replacement (id INT AUTO_INCREMENT NOT NULL, material_norm_main_id BIGINT UNSIGNED DEFAULT NULL, material_norm_replacement_id BIGINT UNSIGNED DEFAULT NULL, INDEX IDX_2AE935C15B66254F (material_norm_main_id), INDEX IDX_2AE935C18DCBA107 (material_norm_replacement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE material_norm_replacement ADD CONSTRAINT FK_2AE935C15B66254F FOREIGN KEY (material_norm_main_id) REFERENCES material_norms (id)');
        $this->addSql('ALTER TABLE material_norm_replacement ADD CONSTRAINT FK_2AE935C18DCBA107 FOREIGN KEY (material_norm_replacement_id) REFERENCES material_norms (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE material_norm_replacement');
    }
}
