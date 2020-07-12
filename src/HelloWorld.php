<?php


namespace Composer\Demo\Project;


class HelloWorld
{
    /**
     * @var string
     */
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getLength()
    {
        return strlen($this->text);
    }
}