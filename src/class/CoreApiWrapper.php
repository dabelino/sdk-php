<?php

namespace de\dabelino\sdk;

use de\dabelino\sdk\model\Category;
use de\dabelino\sdk\model\CustomerGroup;
use de\dabelino\sdk\model\Image;
use de\dabelino\sdk\model\Product;
use de\dabelino\sdk\model\Tag;

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

    public function getProductList(
        int $customerGroupId = 0,
        int $categoryId = 0,
        string $filter = '',
        bool $deep = false
    ) {
        // init
        $result = array();

        // action
        $getParameter = array(
            'customerGroupId' => $customerGroupId,
            'categoryId' => $categoryId,
            'filter' => $filter,
            'deep' => $deep
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
            $categoryList = array();
            foreach ($productStdClass->categoryList as $categoryStdClass) {
                array_push(
                    $categoryList,
                    new Category(
                        new CustomerGroup(
                            $categoryStdClass->customerGroup->name
                        ),
                        $categoryStdClass->name
                    )
                );
            }

            $imageList = array();
            foreach ($productStdClass->imageList as $imageStdClass) {
                array_push(
                    $imageList,
                    new Image(
                        $imageStdClass->name,
                        $imageStdClass->title,
                        $imageStdClass->file
                    )
                );
            }

            $tagList = array();
            foreach ($productStdClass->tagList as $tagStdClass) {
                array_push(
                    $tagList,
                    new Tag(
                        $tagStdClass->name
                    )
                );
            }

            $product = new Product(
                $deep ? new CustomerGroup($productStdClass->customerGroup->name) : null,
                $productStdClass->path,
                $productStdClass->name,
                $productStdClass->teaser,
                $productStdClass->description,
                (double)$productStdClass->pricePerSellingUnit,
                (double)$productStdClass->recommendedPricePerSellingUnit,
                (int)$productStdClass->sellingUnit,
                $productStdClass->sku,
                $productStdClass->ean,
                $deep ? $categoryList : null,
                $deep ? $imageList : null,
                $deep ? $tagList : null
            );
            array_push($result, $product);
        }

        // return
        return $result;
    }

    public function getCategoryList(int $customerGroupId = 0, string $filter = '', bool $deep = false)
    {
        // init
        $result = array();

        // action
        $getParameter = array(
            'customerGroupId' => $customerGroupId,
            'filter' => $filter,
            'deep' => $deep
        );
        $getParameter = http_build_query($getParameter);

        // url
        $url = $this->baseUrl.'/categories?'.$getParameter;

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
        foreach ($response as $categoryStdClass) {
            $category = new Category(
                $deep ? new CustomerGroup($categoryStdClass->customerGroup->name) : null,
                $categoryStdClass->path,
                $categoryStdClass->name
            );
            array_push($result, $category);
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
