<?php
    // neu la phuong thuc GET --> $tenbien = $_GET['name input'];
    if(isset($_POST['submit'])){
        // khi ma ng dung nhan vao button co name = submit
        // thi moi chay code
        $user = $_GET['email'];
        $pass = $_GET['pswd'];
        $name = $_GET['hoten'];
        echo 'name'.$name;
    }
?>