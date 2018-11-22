<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/11/2018
 * Time: 09:25
 */
function divide ($x,$y) {
    if ($y!=0) return $x/$y;
    else  throw new Exception('Division par zéro impossible');
}

$x=[0,5,82,76,4,514,900];
$y=[3,4,5,7,6.5,0,2];

for ($i=0;$i<7;$i++) {
    try {
        $z= divide($x[$i], $y[$i]);
        echo $z."<br>";
    } catch (Exception $e) {

        echo 'Exception reçue : ', $e->getMessage(), "<br>";
        echo "Previous : " ,$e->getPrevious(),"<br>";
        echo "Code : " ,$e->getCode() ,"<br>";
        echo "File : " ,$e->getFile() ,"<br>";
        echo "Line : " ,$e->getLine() ,"<br>";
        echo "trace : ";print_r ($e->getTrace()) ; echo "<br>";
        echo "trace As String : ",$e->getTraceAsString() ,"<br>";
        $str= $e->__toString() ; echo "toString : $str <br>";

    }
}