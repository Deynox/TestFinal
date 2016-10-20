<?php

namespace Guillaume\CRUDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity
 */
class Section
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
     * @ORM\Column(name="intitule", type="string", length=60, nullable=true)
     */
    private $intitule;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Article", inversedBy="section")
     * @ORM\JoinTable(name="article_has_section",
     *   joinColumns={
     *     @ORM\JoinColumn(name="section_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   }
     * )
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }
    public function __toString() {
        return $this->intitule;
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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Section
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Add article
     *
     * @param \Guillaume\CRUDBundle\Entity\Article $article
     *
     * @return Section
     */
    public function addArticle(\Guillaume\CRUDBundle\Entity\Article $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Guillaume\CRUDBundle\Entity\Article $article
     */
    public function removeArticle(\Guillaume\CRUDBundle\Entity\Article $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticle()
    {
        return $this->article;
    }
}
