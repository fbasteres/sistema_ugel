<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form\Form1;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $totalForm1 = Form1::where('user_id', Auth::id())->count();
        //$totalForm1 = Form1::count('id');
        return view('dashboard',compact('totalForm1'));
    }
}
