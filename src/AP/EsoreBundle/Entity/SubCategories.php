<?php

namespace AP\EsoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * SubCategories
 *
 * @ORM\Table(name="subcategories")
 * @ORM\Entity(repositoryClass="AP\EsoreBundle\Entity\SubCategoriesRepository")
 */
class SubCategories
{
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="Products", mappedBy="subcategories")
     */
    private $products;
    /**
     * @var Categories
     * 
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="subcategories")
     * @ORM\JoinColumn(name="catId", referencedColumnName="id")
     */
    private $categories;

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
     * @ORM\Column(name="subCatName", type="string", length=255)
     */
    private $subCatName;

    public function __construct() {
        $this -> products = new ArrayCollection();
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
     * Set subCatName
     *
     * @param string $subCatName
     * @return SubCategories
     */
    public function setSubCatName($subCatName)
    {
        $this->subCatName = $subCatName;

        return $this;
    }

    /**
     * Get subCatName
     *
     * @return string 
     */
    public function getSubCatName()
    {
        return $this->subCatName;
    }

    /**
     * Set categories
     *
     * @param \AP\EsoreBundle\Entity\Categories $categories
     * @return SubCategories
     */
    public function setCategories(\AP\EsoreBundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \AP\EsoreBundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }

        /**
     * Add products
     *
     * @param \AP\EsoreBundle\Entity\Products $products
     * @return SubCategories
     */
    public function addProduct(\AP\EsoreBundle\Entity\Products $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \AP\EsoreBundle\Entity\Products $products
     */
    public function removeProduct(\AP\EsoreBundle\Entity\Products $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
        public function __toString() {
        return $this -> getSubCatName();
    }
}
