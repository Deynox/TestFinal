<?php

namespace Guillaume\CRUDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="fk_article_utilisateur1_idx", columns={"utilisateur_id"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=65535, nullable=true)
     */
    private $texte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id")
     * })
     */
    private $utilisateur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Section", mappedBy="article")
     */
    private $section;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->section = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime;
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
     * @return Article
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
     * Set texte
     *
     * @param string $texte
     *
     * @return Article
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set utilisateur
     *
     * @param \Guillaume\CRUDBundle\Entity\Utilisateur $utilisateur
     *
     * @return Article
     */
    public function setUtilisateur(\Guillaume\CRUDBundle\Entity\Utilisateur $utilisateur = null)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Guillaume\CRUDBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add section
     *
     * @param \Guillaume\CRUDBundle\Entity\Section $section
     *
     * @return Article
     */
    public function addSection(\Guillaume\CRUDBundle\Entity\Section $section)
    {
        $this->section[] = $section;

        return $this;
    }

    /**
     * Remove section
     *
     * @param \Guillaume\CRUDBundle\Entity\Section $section
     */
    public function removeSection(\Guillaume\CRUDBundle\Entity\Section $section)
    {
        $this->section->removeElement($section);
    }

    /**
     * Get section
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSection()
    {
        return $this->section;
    }
}
