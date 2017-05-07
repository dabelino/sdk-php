<?php

namespace de\dabelino\sdk\model;

class Image
{
    // region member
    private $id = 0;
    private $name = '';
    private $title = '';
    private $file = '';
    // endregion

    // region constructor
    public function __construct(
        int $id,
        string $name,
        string $title,
        string $file
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
        $this->file = $file;
    }
    // endregion

    // region methods
    public function getStdClass()
    {
        // init
        $result = new \stdClass();

        // action
        $result->id = $this->id;
        $result->name = $this->name;
        $result->title = $this->title;
        $result->file = $this->file;

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

    public function getId()
    {
        return $this->id;
    }

    public function setId(string $value)
    {
        $this->id = $value;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $value)
    {
        $this->title = $value;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile(string $value)
    {
        $this->file = $value;
    }
    // endregion
}
