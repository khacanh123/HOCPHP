<?php
 // code
 //khai bao bien
 // cu phap: $tenbien = giatri;
 $name = "Anh";
 $age  = 20;
 $float_diem = 8.5;//--> float
 $arr = null; //kdl:rong
 $sv = array("Anh");//hoc o phan sau
 echo "Ten cua toi la:".$name;
 echo "Tuoi cua toi:"."20"."</br>";
 echo "Ban dau:".$name;
 // kiem tra bien thuoc KDL nao: var_dump($name);
 var_dump($age)."<br/>"; // --> number
 var_dump($name);
var_dump($float_diem);
var_dump($sv);
// define("tenhang",giatri)
define("Hello","My name is Anh");
echo constant("Hello");
// cau hoi: bien va hang khac nhau nhu nao(pv)
// bien: co the thay doi gia tri
// hang: k, dinh nghia mot lan va k the thay doi gia tri
define("Hello","345"); // errors
$name = "BC";
echo "Thay doi".$name;

?>