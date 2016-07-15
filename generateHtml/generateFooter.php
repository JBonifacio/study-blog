<?php
/**
 * Created by PhpStorm.
 * User: josephbonifacio
 * Date: 7/14/16
 * Time: 3:23 PM
 */

class generateFooter
{
    public function insertFooter()
    {
        $html = '
            <footer>
                <div>
                    <p>My Blog of Stuff</p>
                    <nav>
                      <a href="/www">About</a> |
                      <a href="/www">Contact Us</a> |
                      <a href="/www">Mission</a> |
                      <a href="/www">More</a>
                    </nav>
                </div>
            </footer>
        ';

        echo $html;
    }
}