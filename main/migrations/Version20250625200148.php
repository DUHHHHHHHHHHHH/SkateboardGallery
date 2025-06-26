<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250625200148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE skateboard (id INT AUTO_INCREMENT NOT NULL, marca VARCHAR(255) NOT NULL, modello VARCHAR(255) NOT NULL, taglia VARCHAR(50) NOT NULL, colore VARCHAR(100) NOT NULL, tipologia VARCHAR(255) NOT NULL, immagini LONGTEXT NOT NULL COMMENT '(DC2Type:simple_array)', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

         $this->addSql(<<<'SQL'
        INSERT INTO skateboard (marca, modello, taglia, colore, tipologia, immagini) VALUES
        ('Almost', 'Impact Light', '8.0', 'Blu', 'Street', '1-01.webp,1-02.webp,1-03.webp'),
        ('Plan B', 'Team OG', '8.25', 'Rosso', 'Vert', '2-01.webp,2-02.webp,2-03.webp'),
        ('Girl', 'Mike Mo', '7.75', 'Verde', 'Cruiser', '3-01.webp,3-02.webp,3-03.webp'),
        ('Creature', 'Gravette', '8.5', 'Nero', 'Downhill', '4-01.webp,4-02.webp,4-03.webp'),
        ('Enjoi', 'Whitey Panda', '8.0', 'Bianco', 'Street', '5-01.webp,5-02.webp,5-03.webp'),
        ('Zero', 'Single Skull', '8.25', 'Rosso', 'Vert', '6-01.webp,6-02.webp,6-03.webp'),
        ('Toy Machine', 'Monster', '8.0', 'Verde', 'Cruiser', '7-01.webp,7-02.webp,7-03.webp'),
        ('Blind', 'OG Reaper', '7.75', 'Blu', 'Old School', '8-01.webp,8-02.webp,8-03.webp'),
        ('Element', 'Seal', '8.25', 'Giallo', 'Street', '9-01.webp,9-02.webp,9-03.webp'),
        ('Santa Cruz', 'Screaming Hand', '8.0', 'Azzurro', 'Cruiser', '10-01.webp,10-02.webp,10-03.webp'),
        ('Baker', 'Brand Logo', '8.5', 'Arancione', 'Downhill', '11-01.webp,11-02.webp,11-03.webp'),
        ('Plan B', 'Joslin', '8.25', 'Viola', 'Vert', '12-01.webp,12-02.webp,12-03.webp'),
        ('Almost', 'Youness', '8.0', 'Rosa', 'Street', '13-01.webp,13-02.webp,13-03.webp'),
        ('Powell', 'Peralta', '8.5', 'Marrone', 'Old School', '14-01.webp,14-02.webp,14-03.webp'),
        ('Girl', 'Malto', '7.75', 'Turchese', 'Cruiser', '15-01.webp,15-02.webp,15-03.webp'),
        ('Creature', 'Navarrette', '8.25', 'Grigio', 'Downhill', '16-01.webp,16-02.webp,16-03.webp'),
        ('Enjoi', 'Louie Barletta', '8.0', 'Lime', 'Street', '17-01.webp,17-02.webp,17-03.webp'),
        ('Zero', 'Cole', '8.25', 'Ciano', 'Vert', '18-01.webp,18-02.webp,18-03.webp'),
        ('Toy Machine', 'Fists', '8.0', 'Oro', 'Cruiser', '19-01.webp,19-02.webp,19-03.webp'),
        ('Blind', 'TJ Rogers', '7.75', 'Argento', 'Old School', '20-01.webp,20-02.webp,20-03.webp'),
        ('Element', 'Section', '8.0', 'Blu', 'Street', '21-01.webp,21-02.webp,21-03.webp'),
        ('Santa Cruz', 'Classic Dot', '8.25', 'Rosso', 'Vert', '22-01.webp,22-02.webp,22-03.webp'),
        ('Baker', 'Reynolds', '8.5', 'Verde', 'Downhill', '23-01.webp,23-02.webp,23-03.webp'),
        ('Plan B', 'Sheckler', '8.0', 'Bianco', 'Street', '24-01.webp,24-02.webp,24-03.webp'),
        ('Almost', 'Mullen', '8.25', 'Nero', 'Vert', '25-01.webp,25-02.webp,25-03.webp'),
        ('Powell', 'Caballero', '7.75', 'Giallo', 'Old School', '26-01.webp,26-02.webp,26-03.webp'),
        ('Girl', 'Howard', '8.0', 'Azzurro', 'Cruiser', '27-01.webp,27-02.webp,27-03.webp'),
        ('Creature', 'Baekkel', '8.5', 'Arancione', 'Downhill', '28-01.webp,28-02.webp,28-03.webp'),
        ('Enjoi', 'Spectrum', '8.25', 'Viola', 'Street', '29-01.webp,29-02.webp,29-03.webp'),
        ('Zero', 'Blood Skull', '8.0', 'Rosa', 'Vert', '30-01.webp,30-02.webp,30-03.webp');
    SQL);

        $this->addSql(<<<'SQL'
            CREATE TABLE user ( id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE skateboard
        SQL);

        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
    }
}
