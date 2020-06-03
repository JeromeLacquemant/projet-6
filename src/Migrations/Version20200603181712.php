<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200603181712 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE videos (id INT AUTO_INCREMENT NOT NULL, figures_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_29AA64325C7F3A37 (figures_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA64325C7F3A37 FOREIGN KEY (figures_id) REFERENCES figure (id)');
        $this->addSql('ALTER TABLE figure CHANGE figure_user_id figure_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE figure ADD CONSTRAINT FK_2F57B37AAD316A17 FOREIGN KEY (figure_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2F57B37AAD316A17 ON figure (figure_user_id)');
        $this->addSql('ALTER TABLE user CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C541DB185 FOREIGN KEY (comment_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_9474526C541DB185 ON comment (comment_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE videos');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C541DB185');
        $this->addSql('DROP INDEX IDX_9474526C541DB185 ON comment');
        $this->addSql('ALTER TABLE figure DROP FOREIGN KEY FK_2F57B37AAD316A17');
        $this->addSql('DROP INDEX IDX_2F57B37AAD316A17 ON figure');
        $this->addSql('ALTER TABLE figure CHANGE figure_user_id figure_user_id VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
