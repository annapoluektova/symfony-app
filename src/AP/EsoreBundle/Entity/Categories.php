<?php

namespace AP\EsoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AP\EsoreBundle\Entity\CategoriesRepository")
 */
class Categories
{
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="SubCategories", mappedBy="categories")
     */
    private $subcategories;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="catName", type="string", length=255)
     */
    private $catName;

    public function __construct(){
        $this -> subcategories = new ArrayCollection();
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
     * Set catName
     *
     * @param string $catName
     * @return Categories
     */
    public function setCatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    /**
     * Get catName
     *
     * @return string 
     */
    public function getCatName()
    {
        return $this->catName;
    }

    /**
     * Add subcategories
     *
     * @param \AP\EsoreBundle\Entity\SubCategories $subcategories
     * @return Categories
     */
    public function addSubcategory(\AP\EsoreBundle\Entity\SubCategories $subcategories)
    {
        $this->subcategories[] = $subcategories;

        return $this;
    }

    /**
     * Remove subcategories
     *
     * @param \AP\EsoreBundle\Entity\SubCategories $subcategories
     */
    public function removeSubcategory(\AP\EsoreBundle\Entity\SubCategories $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
    /**
     * Render a Publication as a string.
     * 
     * @return string
     */
    public function __toString() {
        return $this -> getCatName();
    }
}
