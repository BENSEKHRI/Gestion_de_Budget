<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329143724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE geographie (id INT AUTO_INCREMENT NOT NULL, pays VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE geography');
        $this->addSql('ALTER TABLE fait ADD canal_id INT DEFAULT NULL, ADD date_id INT DEFAULT NULL, ADD produit_id INT DEFAULT NULL, ADD geographie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31F68DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FB897366B FOREIGN KEY (date_id) REFERENCES temps (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FF713E42E FOREIGN KEY (geographie_id) REFERENCES geographie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_954BB31F68DB5B2E ON fait (canal_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_954BB31FB897366B ON fait (date_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_954BB31FF347EFB ON fait (produit_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_954BB31FF713E42E ON fait (geographie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FF713E42E');
        $this->addSql('CREATE TABLE geography (id INT AUTO_INCREMENT NOT NULL, pays VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE geographie');
        $this->addSql('ALTER TABLE budget CHANGE geographie geographie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE canal canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE produit produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ventes ventes VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE version version VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE canal CHANGE type_canal type_canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31F68DB5B2E');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FB897366B');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FF347EFB');
        $this->addSql('DROP INDEX UNIQ_954BB31F68DB5B2E ON fait');
        $this->addSql('DROP INDEX UNIQ_954BB31FB897366B ON fait');
        $this->addSql('DROP INDEX UNIQ_954BB31FF347EFB ON fait');
        $this->addSql('DROP INDEX UNIQ_954BB31FF713E42E ON fait');
        $this->addSql('ALTER TABLE fait DROP canal_id, DROP date_id, DROP produit_id, DROP geographie_id');
        $this->addSql('ALTER TABLE produit CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_produit type_produit VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reset_password_request CHANGE selector selector VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE "user" CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
