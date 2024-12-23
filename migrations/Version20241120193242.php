<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241120193242 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Check if the 'category' table exists before creating it
        if (!$schema->hasTable('category')) {
            $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }

        // Check if the 'dish' table exists before creating it
        if (!$schema->hasTable('dish')) {
            $this->addSql('CREATE TABLE dish (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, price NUMERIC(5, 2) NOT NULL, INDEX IDX_957D8CB812469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
            $this->addSql('ALTER TABLE dish ADD CONSTRAINT FK_957D8CB812469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        }
    }

    public function down(Schema $schema): void
    {
        // Drop the foreign key and tables if needed
        $this->addSql('ALTER TABLE dish DROP FOREIGN KEY FK_957D8CB812469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE dish');
    }
}

// declare(strict_types=1);

// namespace DoctrineMigrations;

// use Doctrine\DBAL\Schema\Schema;
// use Doctrine\Migrations\AbstractMigration;

// /**
//  * Auto-generated Migration: Please modify to your needs!
//  */
// final class Version20241120193242 extends AbstractMigration
// {
//     public function getDescription(): string
//     {
//         return '';
//     }

//     public function up(Schema $schema): void
//     {
//         // this up() migration is auto-generated, please modify it to your needs
//         $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//         $this->addSql('CREATE TABLE dish (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, price NUMERIC(5, 2) NOT NULL, INDEX IDX_957D8CB812469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//         $this->addSql('ALTER TABLE dish ADD CONSTRAINT FK_957D8CB812469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
//     }

//     public function down(Schema $schema): void
//     {
//         // this down() migration is auto-generated, please modify it to your needs
//         $this->addSql('ALTER TABLE dish DROP FOREIGN KEY FK_957D8CB812469DE2');
//         $this->addSql('DROP TABLE category');
//         $this->addSql('DROP TABLE dish');
//     }
// }
