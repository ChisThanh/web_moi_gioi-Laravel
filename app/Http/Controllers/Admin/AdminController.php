<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        view()->share('title', "Trang chủ");
    }
    public function index()
    {
        return view('admin.index');
    }
}
