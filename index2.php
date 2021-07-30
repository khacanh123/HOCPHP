<?php
    // phep toan
    $a = 5;
    $b= 7;
    echo $a + $b; // in
    // - ,* ,/
    $c = 20; // int
    $c2 = "20";
    echo $c % $b;
    //
    if($a == $b){
        echo 'bang'.'<br/>'; 
    }else{
        echo 'k bang'.'<br/>';
    }
    // == , ===
    // == chi so sanh gia tri
    // === ca gia tri va kdl 
    $tuoi = "20";//string
    var_dump($c === $tuoi); // bool(true)
    // khong bang
    if($c2 !== $c){
        echo 'k bang nhau'.'<br/>'; // dng
    }else{
        echo 'bang nhau'.'<br/>';// gia tri
    }
    // !== : so sanh k bang nhung ket hop so sanh kdl cua 2 bien
    // logic
    $user = 'abc';
    $pass ='345';
    if($user ==='abc' && $pass === 345){ // neu 2 dieu kien deu dung
        echo 'dang nhap thanh cong'.'<br/>';
    }else{
        echo 'dang nhap that bai'.'<br/>';
    }
    if($user === 'abc' || $pass === 345){ // neu mot trong hai dieu kien deu dung
        echo 'Dang nhap thanh cong'.'<br/>';
    }else{
        echo 'that bai'.'<br/>';
    }
    // !: nguoc lai cua dieu kien
    if(!($user == 'abcd')){ 
        echo 'dung'.'<br/>';
    }else{
        echo 'sai'.'<br/>';
    }
    $isUser = true;
    if(!$isUser){
        echo 'Chua dang nhap';
    }else{
        echo 'Da da nhap';
    }
?>