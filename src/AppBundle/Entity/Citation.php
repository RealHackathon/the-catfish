<?php

namespace AppBundle\Entity;

/**
 * Citation
 */
class Citation
{
    /**
     * @var string
     */
    private $citation;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Movie
     */
    private $movieid;


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
     * Set movieid
     *
     * @param \AppBundle\Entity\Movie $movieid
     *
     * @return Citation
     */
    public function setMovieid(\AppBundle\Entity\Movie $movieid = null)
    {
        $this->movieid = $movieid;

        return $this;
    }

    /**
     * Get movieid
     *
     * @return \AppBundle\Entity\Movie
     */
    public function getMovieid()
    {
        return $this->movieid;
    }
}

