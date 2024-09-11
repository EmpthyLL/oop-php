<?php 

class ContohStatic{
    public static $a = 1;

    public static function hallo(){
        return "Hello World! : ".self::$a++;
    }
}
echo ContohStatic::hallo()."<br>";
echo ContohStatic::hallo()."<hr>";

class Contoh{
    public static $a = 1;

    public function hallo(){
        return "Hello World! : ".self::$a++;
    }
}
$obj = new Contoh();
echo $obj->hallo()."<br>";
echo $obj->hallo()."<br>";
echo $obj->hallo()."<hr>";

$obj2 = new Contoh();
echo $obj2->hallo()."<br>";
echo $obj2->hallo()."<br>";
echo $obj2->hallo()."<hr>";
?>