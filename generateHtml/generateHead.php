<?php

class generateHead
{
    private $stylesheet = 'stylesheet.css';
    private $stylesheetAlt = null;
    private $h1 = null;
    private $listStylesheets = null;

    public function __construct($arg)
    {
        $this->h1 = $arg;
    }

    public function insertHead()
    {
        $header = $this->h1;
        $stylesheet = $this->stylesheet;

        $html = '
            <head>
                <title>'.$header.'</title>
                <link rel="stylesheet" type="text/css" href="'.$stylesheet.'">
            </head>
        ';

        echo $html;
    }
}