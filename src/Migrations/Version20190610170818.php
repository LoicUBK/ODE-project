<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190610170818 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fake_user ADD password VARCHAR(255) NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(100) NOT NULL, CHANGE ville ville VARCHAR(15) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fake_user DROP password, CHANGE nom nom VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE ville ville VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE description description TEXT NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
