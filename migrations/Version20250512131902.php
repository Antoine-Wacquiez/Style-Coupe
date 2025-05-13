<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250512131902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, coiffeur_id INT DEFAULT NULL, prestation_id INT DEFAULT NULL, date_heure DATETIME NOT NULL, valide TINYINT(1) NOT NULL, INDEX IDX_65E8AA0A19EB6921 (client_id), INDEX IDX_65E8AA0ABD427C57 (coiffeur_id), INDEX IDX_65E8AA0A9E45C554 (prestation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A19EB6921 FOREIGN KEY (client_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0ABD427C57 FOREIGN KEY (coiffeur_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A9E45C554 FOREIGN KEY (prestation_id) REFERENCES prestation (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A19EB6921
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0ABD427C57
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A9E45C554
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE rendez_vous
        SQL);
    }
}
