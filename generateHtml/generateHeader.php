<?php
/**
 * Created by PhpStorm.
 * User: josephbonifacio
 * Date: 7/13/16
 * Time: 1:13 PM
 */

class generateHeader
{
    private $webPageTitle = 'Study Blog';
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
        $htmlTitle = $this->webPageTitle;
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
                    <h1>'.$htmlTitle.'</h1>
                    <div id="subheader">
                        <h2>'.$htmlHeader.'</h2>
                    </div>
                </header>
            ';

            echo $html;
        }
        else
        {
            $html = '
                <header>
                    <h1>'.$htmlTitle.'</h1>
                    <div id="subheader">
                        <h2>'.$htmlHeader.'</h2>
                        <p class="headerSubtitle">'.$htmlSubtitle.'</p>
                    </div>
                </header>
            ';

            echo $html;
        }
    }
}