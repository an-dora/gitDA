<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginIndex()
    {
        return view('user.login');
    }
    public function regIndex()
    {
        return view('user.register');
    }

    public function updateUser(Request $request, $id = null)
    {
        $rules_u = [
            "name" => "required",
            "email" => "required|email",
            "phone_number" => "required|numeric",
            "cmnd" => "required|numeric",
        ];
        $fields_u = [
            "name" => "Họ và tên",
            "email" => "Email",
            "phone_number" => "Số điện thoại",
            "cmnd" => "CMND/CCCD",
        ];
        $data = $request->all();
        $vldt = Validator::make($data, $rules_u, [], $fields_u);
        $vldt->validate();
        $user = User::findOrFail($id);
        $sp = User::updateOrCreate(['id' => $id], $data);
        return redirect()->route('info',['id' => $id]);
    }
    public function createUser(Request $request)
    {
        $data = $request->all();
        $rules = [
            "name" => ["required"],
            "email" => ["required", "email"],
            "phone_number" => ["required", "numeric"],
            "cmnd" => ["required", "numeric"],
            "password" => ["required", "min:8"],
            "confirmPassword" => ["same:password"]
        ];
        $fields = [
            "name" => "Họ tên",
            "email" => "Email",
            "phone_number" => "Số điện thoại",
            "cmnd" => "Chứng minh nhân dân",
            "password" => "Mật khẩu",
            "confirmPassword" => "Xác nhận mật khẩu",
        ];
        $validator = Validator::make($data, $rules, [], $fields);
        $validator->validate();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->cmnd = $request->cmnd;
        $user->is_admin = isset($request->is_admin) ? true : false;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route("user.login");
    }
    function infoUser($id)
    {
        $user = User::findOrFail($id);
        return view('user.info')->with('user', $user);
    }
    function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit')->with('user', $user);
    }
    public function userLogin(Request $request)
    {

        $input = $request->all();

        $this->validate($request, [
            'emailLogin' => 'required',
            'passwordLogin' => 'required',
        ]);
        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';
        if (Auth::attempt(array($fieldType => $input['emailLogin'], 'password' => $input['passwordLogin']))) {
            return redirect()->route('home');
        } else {
            
            return redirect()->route('user.login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }
    public function userLogout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
