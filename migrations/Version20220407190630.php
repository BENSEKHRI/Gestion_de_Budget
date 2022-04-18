<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407190630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canal ADD fait_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE canal ADD CONSTRAINT FK_E181FB595FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id)');
        $this->addSql('CREATE INDEX IDX_E181FB595FDD448B ON canal (fait_id)');
        $this->addSql('ALTER TABLE geographie ADD fait_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geographie ADD CONSTRAINT FK_C73BFEE25FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id)');
        $this->addSql('CREATE INDEX IDX_C73BFEE25FDD448B ON geographie (fait_id)');
        $this->addSql('ALTER TABLE produit ADD fait_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC275FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC275FDD448B ON produit (fait_id)');
        $this->addSql('ALTER TABLE temps ADD fait_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE temps ADD CONSTRAINT FK_60B4B7205FDD448B FOREIGN KEY (fait_id) REFERENCES fait (id)');
        $this->addSql('CREATE INDEX IDX_60B4B7205FDD448B ON temps (fait_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE budget CHANGE geographie geographie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE canal canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE produit produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ventes ventes VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE version version VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE canal DROP FOREIGN KEY FK_E181FB595FDD448B');
        $this->addSql('DROP INDEX IDX_E181FB595FDD448B ON canal');
        $this->addSql('ALTER TABLE canal DROP fait_id, CHANGE type_canal type_canal VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE geographie DROP FOREIGN KEY FK_C73BFEE25FDD448B');
        $this->addSql('DROP INDEX IDX_C73BFEE25FDD448B ON geographie');
        $this->addSql('ALTER TABLE geographie DROP fait_id, CHANGE pays pays VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC275FDD448B');
        $this->addSql('DROP INDEX IDX_29A5EC275FDD448B ON produit');
        $this->addSql('ALTER TABLE produit DROP fait_id, CHANGE nom_produit nom_produit VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_produit type_produit VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reset_password_request CHANGE selector selector VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hashed_token hashed_token VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE temps DROP FOREIGN KEY FK_60B4B7205FDD448B');
        $this->addSql('DROP INDEX IDX_60B4B7205FDD448B ON temps');
        $this->addSql('ALTER TABLE temps DROP fait_id');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
