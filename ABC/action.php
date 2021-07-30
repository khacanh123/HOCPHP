<?php
    // xu ly form
    // action: noi de xu ly form
    if(isset($_POST['submit'])){
        // lay ve gia tri cua input
        // theo thuoc tinh name cuaa input
        $user = $_POST['email'];
        $pass = $_POST['pswd'];
        $name =$_POST['hoten'];
        if($user == '' || $pass == '' || $name == ''){
            echo 'vui long nhap day du thong tin';
        }else{
            if($user == 'abc' && $pass == 345){
                echo 'Dang nhap thanh cong'.'.Xin chao'.$name; // neu dung
            }else{
                // neu sai
                echo 'That bai';
            }
        }
        die(); // k hien thi noi dung sau no
    }
  
?>