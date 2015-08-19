<?php

namespace AP\EsoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AP\EsoreBundle\Entity\ProductsRepository")
 */
class Products
{
    /**
     * @var SubCategories
     * 
     * @ORM\ManyToOne(targetEntity="SubCategories", inversedBy="products")
     * @ORM\JoinColumn(name="subCatId", referencedColumnName="id")
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
     * @ORM\Column(name="prodName", type="string", length=255)
     */
    private $prodName;

    /**
     * @var string
     *
     * @ORM\Column(name="prodDescription", type="string", length=255, nullable=true)
     */
    private $prodDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deliveryDate", type="date")
     */
    private $deliveryDate;


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
     * Set prodName
     *
     * @param string $prodName
     * @return Products
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;

        return $this;
    }

    /**
     * Get prodName
     *
     * @return string 
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * Set prodDescription
     *
     * @param string $prodDescription
     * @return Products
     */
    public function setProdDescription($prodDescription)
    {
        $this->prodDescription = $prodDescription;

        return $this;
    }

    /**
     * Get prodDescription
     *
     * @return string 
     */
    public function getProdDescription()
    {
        return $this->prodDescription;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return Products
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set subcategories
     *
     * @param \AP\EsoreBundle\Entity\SubCategories $subcategories
     * @return Products
     */
    public function setSubcategories(\AP\EsoreBundle\Entity\SubCategories $subcategories = null)
    {
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * Get subcategories
     *
     * @return \AP\EsoreBundle\Entity\SubCategories 
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
    

}
