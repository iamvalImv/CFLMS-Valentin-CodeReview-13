<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520203136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD event_adddress VARCHAR(255) NOT NULL, DROP event_address, DROP events_url, CHANGE email email VARCHAR(255) NOT NULL, CHANGE event_date event_date DATETIME NOT NULL, CHANGE start_time start_time TIME NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE event_capacity event_capacity INT NOT NULL, CHANGE contact contact VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD event_address TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD events_url TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, DROP event_adddress, CHANGE email email TINYTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE event_date event_date DATE DEFAULT NULL, CHANGE start_time start_time DATETIME DEFAULT NULL, CHANGE image image LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE event_capacity event_capacity SMALLINT DEFAULT NULL, CHANGE contact contact LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
