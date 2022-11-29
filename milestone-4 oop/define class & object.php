<?php
class mec{
    public $dept_name;
    public $t_batch;

    function set_dept($dept_name,$t_batch)
    {
        $this->dept_name= $dept_name;
        $this->t_batch= $t_batch;
    }
    function get_dept()
    {
        echo $this->dept_name;
        echo "<br>";
        echo $this->t_batch;
    }
}

$cse= new mec();
$cse->set_dept("CSE",4);
$cse->get_dept();
?>