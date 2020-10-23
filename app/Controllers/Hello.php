<?php

namespace App\Controllers;

class Hello extends BaseController

{
    public function show()
    {
        echo " Pandi ";
    }
    public function index($npm, $name)
    {
        echo $name . "<br>";
        echo $npm . "<br>";
    }
}
