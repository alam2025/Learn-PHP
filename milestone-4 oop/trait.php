<?php
trait ex1{
    public function welcome(){
        echo "This is example-1";
    }
}
trait ex2{
    public function welcome2(){
        echo "this is example-2";
    }
}

class get_Data{
     use ex1;
}

class set_data{ //multiple inheritance
    use ex1,ex2;
}

$data1= new get_Data();
$data1->welcome();
echo "<br>";

$data2 = new set_data();
$data2->welcome();
$data2->welcome2();
?>