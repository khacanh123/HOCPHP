<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function Login(){
        return view('login-form');
        // tạo file login-form có 2 trường (username, password)
    }
    function CheckLogin(Request $request){
        $AccountList = array(
            [
                'username' => 'abc',
                'password' => '234',
                'level' => 2
            ],
            [
                'username' => 'abd',
                'password' => '236',
                'level' => 2
            ],
            [
                'username' => 'admin',
                'password' => 'admin02',
                'level' => 0
            ],
        );
        // nhận dữ liệu từ form và kiểm tra xem có trùng với item nào của mảng $AccountList không?
        /*
            - Nếu không trùng với item nào của mảng $AccountList --> in ra màn hình "Tài khoản không đúng"
            - Nếu trùng với item của mảng $AccountList, nếu item['level'] = 2 -> in ra "Tài khoản user", ngược lại "Tài khoản admin"
        */
    }
}
