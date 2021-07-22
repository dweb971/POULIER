<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628175838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, civilite VARCHAR(1) NOT NULL, nom VARCHAR(1000) NOT NULL, prenom VARCHAR(1984) NOT NULL, telephone VARCHAR(10) NOT NULL, email VARCHAR(5977) NOT NULL, date_add DATETIME NOT NULL, date_update DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, id_patient_id INT NOT NULL, visite VARCHAR(20) NOT NULL, patient TINYINT(1) NOT NULL, date_rdv VARCHAR(30) NOT NULL, heure_rdv VARCHAR(5) NOT NULL, date_add DATETIME NOT NULL, date_update DATETIME NOT NULL, INDEX IDX_65E8AA0ACE0312AE (id_patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0ACE0312AE FOREIGN KEY (id_patient_id) REFERENCES patient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0ACE0312AE');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE rendez_vous');
    }
}
