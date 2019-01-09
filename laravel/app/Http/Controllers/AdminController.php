<?php

namespace App\Http\Controllers;

use App\Model\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Phương thức trả về view khi đăng nhập thành công
     */
    public function index()
    {
        return view('admin.dashboard');

    }

    /**
     * Phương thức trả về view dùng để đăng ký tài khoản admin
     */
    public function create()
    {
        return view('admin.auth.register');

    }

    public function store(Request $request)
    {
        // Validate dữ liệu được gửi từ form đi
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ));

    // Khởi tạo Model để lưu Admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password = brcypt($request->password);
        $adminModel->save();

        return redirect()->route('admin.auth.login');
    }
}
