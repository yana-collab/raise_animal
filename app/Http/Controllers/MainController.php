<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
// здесь выводим на экран выращивать
    public function index()
    {

        return view('index');
    }
}
