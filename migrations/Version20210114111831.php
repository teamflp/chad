<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210114111831 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE infos DROP FOREIGN KEY FK_EECA826D9D86650F');
        $this->addSql('DROP INDEX IDX_EECA826D9D86650F ON infos');
        $this->addSql('ALTER TABLE infos CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE infos ADD CONSTRAINT FK_EECA826DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EECA826DA76ED395 ON infos (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE infos DROP FOREIGN KEY FK_EECA826DA76ED395');
        $this->addSql('DROP INDEX IDX_EECA826DA76ED395 ON infos');
        $this->addSql('ALTER TABLE infos CHANGE user_id user_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE infos ADD CONSTRAINT FK_EECA826D9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_EECA826D9D86650F ON infos (user_id_id)');
    }
}
