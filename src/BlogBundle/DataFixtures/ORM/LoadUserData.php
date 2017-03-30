<?php
/**
 * Created by PhpStorm.
 * User: Abul
 * Date: 31.03.2017
 * Time: 0:11
 */

namespace BlogBundle\DataFixtures\ORM;


use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
       $blog = new Blog();
       $blog->setTitle("This is 5 tuitle");
       $blog->setBody("Lorem Ipsum is simply printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
       $blog->setSummery("orem Ipsum is simp");

       $manager->persist($blog);
       $manager->flush();
    }
}