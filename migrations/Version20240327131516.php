<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240327131516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidats CHANGE gender gender TINYINT(1) NOT NULL, CHANGE first_name first_name VARCHAR(255) NOT NULL, CHANGE last_name last_name VARCHAR(255) NOT NULL, CHANGE adress adress VARCHAR(255) NOT NULL, CHANGE country country VARCHAR(255) NOT NULL, CHANGE nationality nationality VARCHAR(255) NOT NULL, CHANGE curriculum_vitae curriculum_vitae VARCHAR(255) NOT NULL, CHANGE profil_picture profil_picture VARCHAR(255) NOT NULL, CHANGE current_location current_location VARCHAR(255) NOT NULL, CHANGE date_of_birth date_of_birth DATE NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE availabilty availabilty DATE NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE notes notes VARCHAR(255) NOT NULL, CHANGE date_created date_created DATE NOT NULL, CHANGE date_updated date_updated VARCHAR(255) NOT NULL, CHANGE date_deleted date_deleted DATE NOT NULL, CHANGE files files VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidats CHANGE gender gender TINYINT(1) DEFAULT NULL, CHANGE first_name first_name VARCHAR(255) DEFAULT NULL, CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL, CHANGE nationality nationality VARCHAR(255) DEFAULT NULL, CHANGE curriculum_vitae curriculum_vitae VARCHAR(255) DEFAULT NULL, CHANGE profil_picture profil_picture VARCHAR(255) DEFAULT NULL, CHANGE current_location current_location VARCHAR(255) DEFAULT NULL, CHANGE date_of_birth date_of_birth DATE DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL, CHANGE availabilty availabilty DATE DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE notes notes VARCHAR(255) DEFAULT NULL, CHANGE date_created date_created DATE DEFAULT NULL, CHANGE date_updated date_updated VARCHAR(255) DEFAULT NULL, CHANGE date_deleted date_deleted DATE DEFAULT NULL, CHANGE files files VARCHAR(255) DEFAULT NULL');
    }
}
