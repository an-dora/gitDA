<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function users()
    {
        $result = User::orderBy('created_at')->paginate(4);
		return view('admin.users')->with('datas', $result);
    }
    public function tours()
    {
        $result = Tour::orderBy('created_at')->paginate(2);
		return view('admin.tours')->with('datas', $result);
    }
}
