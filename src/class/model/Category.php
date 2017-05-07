<?php

namespace de\dabelino\sdk\model;

class Category
{
    // region member
    private $customerGroup = null;
    private $name = '';
    private $path = '';
    // endregion

    // region constructor
    public function __construct(
        CustomerGroup $customerGroup = null,
        string $name = '',
        string $path = ''
    ) {
        $this->customerGroup = $customerGroup;
        $this->name = $name;
        $this->path = $path;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        if ( $this->customerGroup != null) {
            $result->customerGroup = $this->customerGroup->getStdClass();
        }
        $result->name = $this->name;
        $result->path = $this->path;

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


    public function getName()
    {
        return $this->name;
    }

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function getPath()
    {
        return $this->path;
    }
    public function setPath(string $value)
    {
        $this->path = $value;
    }
    // endregion
}
