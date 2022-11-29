<?php
class fruit{
    public $name;
    function __construct($name)
    {
        $this->name=$name;       
    }

    function get_data()
    {
        return $this->name;
    }
}

$apple= new fruit("apple");
echo $apple->get_data();
?>