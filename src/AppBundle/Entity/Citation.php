<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Citation
 *
 * @ORM\Table(name="citation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CitationRepository")
 */
class Citation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="citation", type="text")
     */
    private $citation;

    /**
     * @ORM\ManyToOne(targetEntity="Movie")
     */
    private $movie;

    /**
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     * @return Citation
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
        return $this;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set citation
     *
     * @param string $citation
     *
     * @return Citation
     */
    public function setCitation($citation)
    {
        $this->citation = $citation;

        return $this;
    }

    /**
     * Get citation
     *
     * @return string
     */
    public function getCitation()
    {
        return $this->citation;
    }
}

