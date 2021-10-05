<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('admin.cadastros.clientes.welcome');
    }

    public function register()
    {
        return view('admin.cadastros.clientes.register');
    }
}
