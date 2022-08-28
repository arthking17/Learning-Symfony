<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MoviesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('Fast and Furious 8');
        $movie->setReleaseYear(2017);
        $movie->setDescription('This is a description of Fast and Furious 8');
        $movie->setImagePath('https://imgr.cineserie.com/2021/05/fast-and-furious-8-1280x640.jpeg?imgeng=/f_jpg/cmpr_0/w_1280/h_960/m_cropbox&ver=1');
        
        //
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_4'));
        $manager->persist($movie);
        
        // another movie
        $movie2 = new Movie();
        $movie2->setTitle('Spider-Man : No Way Home');
        $movie2->setReleaseYear(2021);
        $movie2->setDescription('This is a description of Spider-Man : No Way Home');
        $movie2->setImagePath('https://pic.clubic.com/v1/images/1827320/raw?fit=max&width=1200&hash=7e8aa9dd497746d892c942230e9f16d50210d427');
        
        //
        $movie2->addActor($this->getReference('actor_2'));
        $movie2->addActor($this->getReference('actor_3'));
        $manager->persist($movie2);

        $manager->flush();
    }
}
