<?php

class AboutView
{
    private $modelObj;

    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->modelObj = $model;

        print "About - ";
    }

    public function now()
    {
        return $this->modelObj->secondMessage();
    }

    public function today()
    {
        return $this->controller->current();
    }
}