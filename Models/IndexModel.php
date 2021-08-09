<?php

class IndexModel
{
    private $message = 'Home page.';

    function __construct()
    {

    }

    public function welcomeMessage()
    {
        return $this->message;
    }
}