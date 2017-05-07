<?php

namespace de\dabelino\sdk\model;

class Category
{
    // region member
    private $customerGroup = null;
    private $path = '';
    private $name = '';
    // endregion

    // region constructor
    public function __construct(
        CustomerGroup $customerGroup = null,
        string $path = '',
        string $name = ''
    ) {
        $this->customerGroup = $customerGroup;
        $this->path = $path;
        $this->name = $name;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        if ( $this->customerGroup != null) {
            $result->custoemrGroup = $this->customerGroup;
        }
        $result->path = $this->path;
        $result->name = $this->name;

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
    // endregion
}
