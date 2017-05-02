<?php

namespace de\dabelino\sdk\model;

class Product
{
    // region member
    private $name = '';
    private $teaser = '';
    private $description = '';
    private $pricePerSellingUnit = 0.0;
    private $recommendedPricePerSellingUnit = 0.0;
    private $sellingUnit = 0;
    private $sku = '';
    private $ean = '';
    // endregion

    // region constructor
    public function __construct(
        string $name,
        string $teaser,
        string $description,
        float $pricePerSellingUnit,
        float $recommendedPricePerSellingUnit,
        int $sellingUnit,
        string $sku,
        string $ean
    ) {
        $this->name = $name;
        $this->teaser = $teaser;
        $this->description = $description;
        $this->pricePerSellingUnit = $pricePerSellingUnit;
        $this->recommendedPricePerSellingUnit = $recommendedPricePerSellingUnit;
        $this->sellingUnit = $sellingUnit;
        $this->sku = $sku;
        $this->ean = $ean;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        $result->name = $this->name;
        $result->teaser = $this->teaser;
        $result->description = $this->description;
        $result->pricePerSellingUnit = $this->pricePerSellingUnit;
        $result->recommendedPricePerSellingUnit = $this->recommendedPricePerSellingUnit;
        $result->sellingUnit = $this->sellingUnit;
        $result->sku = $this->sku;
        $result->ean = $this->ean;

        // return
        return $result;
    }
    // endregion

    // region get / set
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
}
