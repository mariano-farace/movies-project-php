<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle("The Dark Knight");
        $movie->setReleaseYear(2008);
        $movie->setDescription("DEscription of The Dark Knight");
        $movie->setImagePath("https://cdn.pixabay.com/photo/2019/03/27/05/09/batman-4084262_960_720.jpg");
        $movie->addMovie($this->getReference("actor_1"));
        $movie->addMovie($this->getReference("actor_2"));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Avengers: Endgame");
        $movie2->setReleaseYear(2019);
        $movie->setDescription("DEscription of Avengers: Endgame");
        $movie2->setImagePath("https://cdn.pixabay.com/photo/2022/06/09/06/02/dr-strange-7251770_960_720.jpg");
        $movie2->addMovie($this->getReference("actor_3"));
        $movie2->addMovie($this->getReference("actor_4"));
        $manager->persist($movie2);

        $manager->flush();
    }
}
