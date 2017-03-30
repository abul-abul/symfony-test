<?php


namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Blog
 * @package BlogBundle\Entity
 * @ORM\Table(name="Blog")
 * @ORM\Entity()
 */
class Blog
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @var string
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $summery;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created;

    public function __construct()
    {
        $this->created = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Blog
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set summery
     *
     * @param string $summery
     *
     * @return Blog
     */
    public function setSummery($summery)
    {
        $this->summery = $summery;

        return $this;
    }

    /**
     * Get summery
     *
     * @return string
     */
    public function getSummery()
    {
        return $this->summery;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Blog
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }
}
