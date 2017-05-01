<?php

namespace de\dabelino\sdk;

class Product
{
    // region member
    private $name = '';
    private $teaser = '';
    private $description = '';
    private $pricePerSellingUnit = 0.0;
    private $recommendedPricePerSellingUnit = 0. *;
    private $sellingUnit = 0;
    private $sku = '';
    private $ean = '';
    // endregion

    // region constructor
    public function __construct(
        string name = '',
        string teaser = '',
        string description = '',
        double pricePerSellingUnit = 0.0,
        double recommendedPricePerSellingUnit = 0.0,
        int sellingUnit = 0,
        string sku = '',
        string ean = ''
    ) {


    }
    // endregion
}
