<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form\Form1;
use App\Models\Form\Form3;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalForm1 = Form1::where('user_id', Auth::id())->count();
        $totalForm3 = Form3::where('user_id', Auth::id())->count();
        
        //$totalForm1 = Form1::count('id');
        return view('dashboard',compact('totalForm1','totalForm3'));
    }
}
