<?php

namespace AppBundle\Entity;

/**
 * Keywordlink
 */
class Keywordlink
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Keyword
     */
    private $keywordid;

    /**
     * @var \AppBundle\Entity\Movie
     */
    private $movieid;


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
     * Set keywordid
     *
     * @param \AppBundle\Entity\Keyword $keywordid
     *
     * @return Keywordlink
     */
    public function setKeywordid(\AppBundle\Entity\Keyword $keywordid = null)
    {
        $this->keywordid = $keywordid;

        return $this;
    }

    /**
     * Get keywordid
     *
     * @return \AppBundle\Entity\Keyword
     */
    public function getKeywordid()
    {
        return $this->keywordid;
    }

    /**
     * Set movieid
     *
     * @param \AppBundle\Entity\Movie $movieid
     *
     * @return Keywordlink
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

