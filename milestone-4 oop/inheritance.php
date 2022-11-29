<?php

use mec as GlobalMec;

class DUTU{
    public $college;
    public $dept;

    function __construct($college,$dept)
    {
        $this->college= $college;
        $this->dept= $dept;
    }

    function intro(){
        echo "This is $this->college and dept $this->dept <br>";
    }
}

class mec extends DUTU{
    function msg(){
        echo "Hi , I am from Mymensingh Engineering College <br>";
        $this->intro();
    }
}


$col= new mec("MEC","CSE");
$col->msg();


?>