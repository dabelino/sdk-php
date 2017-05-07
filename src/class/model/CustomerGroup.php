<?php

namespace de\dabelino\sdk\model;

class CustomerGroup
{
    // region member
    private $name = '';
    // endregion

    // region constructor
    public function __construct(
        string $name
    ) {
        $this->name = $name;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        $result->name = $this->name;

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
    // endregion
}
