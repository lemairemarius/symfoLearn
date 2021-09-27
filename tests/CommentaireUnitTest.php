<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use PHPUnit\Framework\TestCase;
use DateTime;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        $commentaire
            ->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setDate($datetime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        $this->assertTrue($commentaire->getAuteur()==='auteur');
        $this->assertTrue($commentaire->getEmail()==='email@test.com');
        $this->assertTrue($commentaire->getDate()===$datetime);
        $this->assertTrue($commentaire->getContenu()==='contenu');
        $this->assertTrue($commentaire->getBlogpost()===$blogpost);
        $this->assertTrue($commentaire->getPeinture()===$peinture);
    }

    public function testIsFalse(){
        $commentaire = new Commentaire();
        $datetime = new DateTime();
        $blogpost = new Blogpost();
        $peinture = new Peinture();

        $commentaire
            ->setAuteur('auteur')
            ->setEmail('email@test.com')
            ->setDate($datetime)
            ->setContenu('contenu')
            ->setBlogpost($blogpost)
            ->setPeinture($peinture);

        $this->assertFalse($commentaire->getAuteur()==='false');
        $this->assertFalse($commentaire->getEmail()==='false@test.com');
        $this->assertFalse($commentaire->getDate()=== new DateTime());
        $this->assertFalse($commentaire->getContenu()==='false');
        $this->assertFalse($commentaire->getBlogpost()=== new Blogpost());
        $this->assertFalse($commentaire->getPeinture()=== new Peinture());

    }

    public function testIsEmpty(){

        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getDate());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());

    }
}
