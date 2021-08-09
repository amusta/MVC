<?php

class AboutModel
{
    private $message;

    public function __construct()
    {
        $this->message = "About";
    }

    public function secondMessage()
    {
        return $this->message = "Second message";
    }
}