<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407191401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal DROP FOREIGN KEY FK_E181FB595FDD448B');
        $this->addSql('DROP INDEX IDX_E181FB595FDD448B ON canal');
        $this->addSql('ALTER TABLE canal DROP fait_id');
        $this->addSql('ALTER TABLE fait ADD canal_id INT DEFAULT NULL, ADD date_id INT DEFAULT NULL, ADD produit_id INT DEFAULT NULL, ADD geographie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31F68DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FB897366B FOREIGN KEY (date_id) REFERENCES temps (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE fait ADD CONSTRAINT FK_954BB31FF713E42E FOREIGN KEY (geographie_id) REFERENCES geographie (id)');
        $this->addSql('CREATE INDEX IDX_954BB31F68DB5B2E ON fait (canal_id)');
        $this->addSql('CREATE INDEX IDX_954BB31FB897366B ON fait (date_id)');
        $this->addSql('CREATE INDEX IDX_954BB31FF347EFB ON fait (produit_id)');
        $this->addSql('CREATE INDEX IDX_954BB31FF713E42E ON fait (geographie_id)');
        $this->addSql('ALTER TABLE geographie DROP FOREIGN KEY FK_C73BFEE25FDD448B');
        $this->addSql('DROP INDEX IDX_C73BFEE25FDD448B ON geographie');
        $this->addSql('ALTER TABLE geographie DROP fait_id');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC275FDD448B');
        $this->addSql('DROP INDEX IDX_29A5EC275FDD448B ON produit');
        $this->addSql('ALTER TABLE produit DROP fait_id');
        $this->addSql('ALTER TABLE temps DROP FOREIGN KEY FK_60B4B7205FDD448B');
        $this->addSql('DROP INDEX IDX_60B4B7205FDD448B ON temps');
        $this->addSql('ALTER TABLE temps DROP fait_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget CHANGE geographie geographie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE canal canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE produit produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ventes ventes VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE version version VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE canal ADD fait_id INT DEFAULT NULL, CHANGE type_canal type_canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE canal ADD CONSTRAINT FK_E181FB595FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E181FB595FDD448B ON canal (fait_id)');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31F68DB5B2E');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FB897366B');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FF347EFB');
        $this->addSql('ALTER TABLE fait DROP FOREIGN KEY FK_954BB31FF713E42E');
        $this->addSql('DROP INDEX IDX_954BB31F68DB5B2E ON fait');
        $this->addSql('DROP INDEX IDX_954BB31FB897366B ON fait');
        $this->addSql('DROP INDEX IDX_954BB31FF347EFB ON fait');
        $this->addSql('DROP INDEX IDX_954BB31FF713E42E ON fait');
        $this->addSql('ALTER TABLE fait DROP canal_id, DROP date_id, DROP produit_id, DROP geographie_id');
        $this->addSql('ALTER TABLE geographie ADD fait_id INT DEFAULT NULL, CHANGE pays pays VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE geographie ADD CONSTRAINT FK_C73BFEE25FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C73BFEE25FDD448B ON geographie (fait_id)');
        $this->addSql('ALTER TABLE produit ADD fait_id INT DEFAULT NULL, CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_produit type_produit VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC275FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_29A5EC275FDD448B ON produit (fait_id)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE selector selector VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE temps ADD fait_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temps ADD CONSTRAINT FK_60B4B7205FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_60B4B7205FDD448B ON temps (fait_id)');
        $this->addSql('ALTER TABLE "user" CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
