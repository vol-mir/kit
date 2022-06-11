<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210615093456 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tracks ADD technological_operation_id BIGINT UNSIGNED DEFAULT NULL, ADD time_cycle DOUBLE PRECISION DEFAULT NULL, ADD time_processing DOUBLE PRECISION DEFAULT NULL, ADD time_piecepiece DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE tracks ADD CONSTRAINT FK_246D2A2E8CBD020D FOREIGN KEY (technological_operation_id) REFERENCES technological_operations (id)');
        $this->addSql('CREATE INDEX IDX_246D2A2E8CBD020D ON tracks (technological_operation_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tracks DROP FOREIGN KEY FK_246D2A2E8CBD020D');
        $this->addSql('DROP INDEX IDX_246D2A2E8CBD020D ON tracks');
        $this->addSql('ALTER TABLE tracks DROP technological_operation_id, DROP time_cycle, DROP time_processing, DROP time_piecepiece');
    }
}
