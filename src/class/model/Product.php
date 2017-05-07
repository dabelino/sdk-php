<?php

namespace de\dabelino\sdk\model;

class Product
{
    // region member
    private $customerGroup = null;
    private $path = '';
    private $name = '';
    private $teaser = '';
    private $description = '';
    private $pricePerSellingUnit = 0.0;
    private $recommendedPricePerSellingUnit = 0.0;
    private $sellingUnit = 0;
    private $sku = '';
    private $ean = '';
    private $categoryList = array();
    private $imageList = array();
    private $tagList = array();
    // endregion

    // region constructor
    public function __construct(
        CustomerGroup $customerGroup = null,
        string $path,
        string $name,
        string $teaser,
        string $description,
        float $pricePerSellingUnit,
        float $recommendedPricePerSellingUnit,
        int $sellingUnit,
        string $sku,
        string $ean,
        array $categoryList = null,
        array $imageList = null,
        array $tagList = null
    ) {
        $this->customerGroup = $customerGroup;
        $this->path = $path;
        $this->name = $name;
        $this->teaser = $teaser;
        $this->description = $description;
        $this->pricePerSellingUnit = $pricePerSellingUnit;
        $this->recommendedPricePerSellingUnit = $recommendedPricePerSellingUnit;
        $this->sellingUnit = $sellingUnit;
        $this->sku = $sku;
        $this->ean = $ean;
        $this->categoryList = $categoryList;
        $this->imageList = $imageList;
        $this->tagList = $tagList;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        if ($this->customerGroup != null) {
            $result->customerGroup = $this->customerGroup->getStdClass();
        }
        $result->path = $this->path;
        $result->name = $this->name;
        $result->teaser = $this->teaser;
        $result->description = $this->description;
        $result->pricePerSellingUnit = $this->pricePerSellingUnit;
        $result->recommendedPricePerSellingUnit = $this->recommendedPricePerSellingUnit;
        $result->sellingUnit = $this->sellingUnit;
        $result->sku = $this->sku;
        $result->ean = $this->ean;
        if ($this->categoryList != null) {
            $result->categoryList = array();
            /** @var Category $category */
            foreach ($this->categoryList as $category) {
                $categoryStdClass = $category->getStdClass();
                $categoryStdClass->customerGroup = $category->getCustomerGroup()->getStdClass();
                array_push($result->categoryList, $categoryStdClass);
            }
        }
        if ($this->imageList != null) {
            $result->imageList = array();
            /** @var Image $image */
            foreach ($this->imageList as $image) {
                array_push($result->imageList, $image->getStdClass());
            }
        }
        if ($this->tagList != null) {
            $result->tagList = array();
            /** @var Image $tag */
            foreach ($this->tagList as $tag) {
                array_push($result->tagList, $tag->getStdClass());
            }
        }

        // return
        return $result;
    }
    // endregion

    // region get / set
    public function getCustomerGroup()
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(string $value)
    {
        $this->customerGroup = $value;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath(string $value)
    {
        $this->path = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function getTeaser()
    {
        return $this->teaser;
    }

    public function setTeaser(string $value)
    {
        $this->teaser = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $value)
    {
        $this->description = $value;
    }

    public function getPricePerSellingUnit()
    {
        return $this->pricePerSellingUnit;
    }

    public function setPricePerSellingUnit(float $value)
    {
        $this->pricePerSellingUnit = $value;
    }

    public function getRecommendedPricePerSellingUnit()
    {
        return $this->recommendedPricePerSellingUnit;
    }

    public function setRecommendedPricePerSellingUnit(float $value)
    {
        $this->recommendedPricePerSellingUnit = $value;
    }

    public function getSellingUnit()
    {
        return $this->sellingUnit;
    }

    public function setSellingUnit(int $value)
    {
        $this->sellingUnit = $value;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku(string $value)
    {
        $this->sku = $value;
    }

    public function getEan()
    {
        return $this->ean;
    }

    public function setEan(string $value)
    {
        $this->ean = $value;
    }

    public function getCategoryList()
    {
        return $this->categoryList;
    }

    public function setCategoryList(array $value)
    {
        $this->categoryList = $value;
    }

    public function getImageList()
    {
        return $this->imageList;
    }

    public function setImageList(array $value)
    {
        $this->imageList = $value;
    }

    public function getTagList()
    {
        return $this->tagList;
    }

    public function setTagList(array $value)
    {
        $this->tagList = $value;
    }
    // endregion
}
