<?php

namespace de\dabelino\sdk;

class CoreApiWrapper
{
    // region member
    private $baseUrl = 'https://api.core.dabelino.pd:5220/v1';
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
    public function addCustomer() {

    }

    public function getCustomer() {

    }

    public function setCustomerPassword() {

    }

    public function addCustomerAddress() {

    }

    public function removeCustomerAddress() {

    }

    public function getCustomerAddressList() {

    }

    public function getCustomerList() {

    }

    public function getCurrentSignedInCustomer() {

    }

    public function addProduct() {

    }

    public function getProduct() {

    }

    public function setProduct() {

    }

    public function getProductList() {
        // init
        $result = array();

        // action
        $url = $this->baseUrl.'/products';

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
                $productStdClass->name,
                $productStdClass->label,
                $productStdClass->credits
            );
            array_push($result, $product);
        }

        // return
        return $result;
    }

    public function addPurchase() {

    }

    public function setPurchaseStatus() {

    }
    // endregion
}
