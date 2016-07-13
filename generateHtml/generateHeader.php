<?php
/**
 * Created by PhpStorm.
 * User: josephbonifacio
 * Date: 7/13/16
 * Time: 1:13 PM
 */


class generateHeader
{
    private $header = NULL;
    private $subtitle = NULL;

    public function __construct($pageHeader,$pageSubtitle)
    {
        $this->header = $pageHeader;
        $this->subtitle = $pageSubtitle;
    }

    public function insertHeader()
    {
        $html = NULL;
        $htmlHeader = $this->header;
        $htmlSubtitle = $this->subtitle;

        if (!$htmlHeader && !$htmlSubtitle)
        {
            echo $html;
        }
        elseif ($htmlHeader && !$htmlSubtitle)
        {
            $html = '
                <header>
                    <h1>'.$htmlHeader.'</h1>
                </header>
            ';

            echo $html;
        }
        else
        {
            $html = '
                <header>
                    <h1>'.$htmlHeader.'</h1>
                    <p class="headerSubtitle">'.$htmlSubtitle.'</p>
                </header>
            ';

            echo $html;
        }
    }
}