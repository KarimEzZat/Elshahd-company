<?php

namespace App\Http\Controllers;

use App\Company;
use App\Video;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index ()
    {
        return view('site')->with(['videos' => Video::all(), 'companies' => Company::all()]);
    }
}
