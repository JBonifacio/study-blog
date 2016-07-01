<?php

class generateHeader
{
    private $stylesheet = 'stylesheet.css';
    private $stylesheetAlt = null;
    private $h1 = null;
    private $listStylesheets = null;

    public function __construct($arg)
    {
        $this->h1 = $arg;
    }

    public function insertHeader()
    {
        $header = $this->h1;
        $stylesheet = $this->stylesheet;
        echo '
            <head>
                <h1>'.$header.'</h1>
                <link rel="stylesheet" type="text/css" href="'.$stylesheet.'">
            </head>
        ';
    }
}