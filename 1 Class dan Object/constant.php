<?php 

define("NAMA","Asep");
echo NAMA;
echo "<hr>";

const UMUR = 23;
echo UMUR;
echo "<hr>";

class Coba{
    const A = 3;
}
echo Coba::A;
echo "<hr>";

echo __DIR__;
echo "<hr>";

function Fun(){
    return __FUNCTION__;
}
echo Fun();
echo "<hr>";

class Tolok{
    public $class = __CLASS__;
}
$obj = new Tolok();
echo $obj->class;
echo "<hr>";

?>