<?php

namespace de\dabelino\sdk;

use de\dabelino\sdk\model\Product;

class CoreApiWrapper
{
    // region member
    private $baseUrl = 'http://api.core.dabelino.pd:5220/v1';
    private $clientCode = '';
    private $username = '';
    private $password = '';
    // endregion

    // region constructor
    public function __construct($clientCode = '', $clientSecret = '', $username = '', $password = '')
    {
        $this->clientCode = $clientCode;
        $this->clientSecret = $clientSecret;
        $this->username = $username;
        $this->password = $password;
    }
    // endregion

    // region methods
    public function addCustomer()
    {

    }

    public function getCustomer()
    {

    }

    public function setCustomerPassword()
    {

    }

    public function addCustomerAddress()
    {

    }

    public function removeCustomerAddress()
    {

    }

    public function getCustomerAddressList()
    {

    }

    public function getCustomerList()
    {

    }

    public function getCurrentSignedInCustomer()
    {

    }

    public function addProduct()
    {

    }

    public function getProduct()
    {

    }

    public function setProduct()
    {

    }

    public function getProductList(int $customerGroupId = 0, int $categoryId = 0, string $filter = '')
    {
        // init
        $result = array();

        // action
        $getParameter = array(
            'customerGroupId' => $customerGroupId,
            'categoryId' => $categoryId,
            'filter' => $filter
        );
        $getParameter = http_build_query($getParameter);

        // url
        $url = $this->baseUrl.'/products?'.$getParameter;

        // setup curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Accept: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response);
        foreach ($response as $productStdClass) {
            $product = new Product(
                $productStdClass->path,
                $productStdClass->name,
                $productStdClass->teaser,
                $productStdClass->description,
                (double)$productStdClass->pricePerSellingUnit,
                (double)$productStdClass->recommendedPricePerSellingUnit,
                (int)$productStdClass->sellingUnit,
                $productStdClass->sku,
                $productStdClass->ean
            );
            array_push($result, $product);
        }

        // return
        return $result;
    }

    public function addPurchase()
    {

    }

    public function setPurchaseStatus()
    {

    }
    // endregion
}
