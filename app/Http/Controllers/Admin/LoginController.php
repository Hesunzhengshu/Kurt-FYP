<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
// use Validation;

class LoginController extends Controller
{
    // //调用模型
    // public function insert(){
    //     $model= new User();
    //     $list=$model->Test();
    //     if($list>0){
    //         return View('test',compact('list'));
    //     }
    //     return view('users/login');
    // }

// public function postCreate(Request $request) {

//     $validated = $request->validate([
//     'username'=>'required|alpha|min:2',
//     'email'=>'required|email|unique:users',
//     'password'=>'required|alpha_num|between:6,12|confirmed',
//     'password_confirmation'=>'required|alpha_num|between:6,12'
//     ]);

    // $validator = Validation::make(Input::all(), User::$rules);
    // if($validator->passes()) {
    //     $user = new User;//实例化User对象
    //     $user->username = Input::get('username');
    //     $user->email = Input::get('email');
    //     // $user->password = Hash::make(Input::get('password'));
    //     $user->save();

    //     return Redirect::to('/login');
    // } else {
        // 验证没通过就显示错误提示信息
        // return Redirect::to('/register')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput(); 

    
    //登录控制器   
    public function login(){
        return view('users.login');
    }

    //form validation
    public function receive(Request $request)
    {
        $rule = [
            'email'=>'required|email',
            'password'=>'required|between:3,12|alpha_num|',
        ];

        $msg = [
            'email.required' => 'The form should be E-mail',
            'password.required' => 'Password is empty or wrong',
        ];

    //obtain input information
    $validator = Validator::make($request->all(), $rule, $msg);
    $user = $request->all();
    $motherfucker = User::where('email', $user['email'])->first();
    // dd($motherfucker);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        if ($motherfucker->email != $user['email'] || $motherfucker->password != $user['password']) {
            return redirect('home/login')->with('error', 'motherfucker asshole!');
        }else{
            return view('index/index'); 
        }

    }

}