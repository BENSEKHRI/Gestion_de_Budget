<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220409215009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27FA0749B8');
        $this->addSql('DROP TABLE mois');
        $this->addSql('ALTER TABLE fait ADD date1 DATE DEFAULT NULL, ADD date2 DATE DEFAULT NULL, ADD date3 DATE DEFAULT NULL, ADD actual1 DOUBLE PRECISION DEFAULT NULL, ADD actual2 DOUBLE PRECISION DEFAULT NULL, ADD actual3 DOUBLE PRECISION DEFAULT NULL, ADD budget1 DOUBLE PRECISION DEFAULT NULL, ADD budget2 DOUBLE PRECISION DEFAULT NULL, ADD budget3 DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_29A5EC27FA0749B8 ON produit');
        $this->addSql('ALTER TABLE produit DROP mois_id, DROP volume_actual, DROP price_actual, DROP price_budget, DROP volume_budget');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mois (id INT AUTO_INCREMENT NOT NULL, mois VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE canal CHANGE type_canal type_canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE fait DROP date1, DROP date2, DROP date3, DROP actual1, DROP actual2, DROP actual3, DROP budget1, DROP budget2, DROP budget3');
        $this->addSql('ALTER TABLE geographie CHANGE pays pays VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit ADD mois_id INT DEFAULT NULL, ADD volume_actual INT NOT NULL, ADD price_actual DOUBLE PRECISION NOT NULL, ADD price_budget DOUBLE PRECISION NOT NULL, ADD volume_budget INT NOT NULL, CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_produit type_produit VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27FA0749B8 FOREIGN KEY (mois_id) REFERENCES mois (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_29A5EC27FA0749B8 ON produit (mois_id)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE selector selector VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE "user" CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
