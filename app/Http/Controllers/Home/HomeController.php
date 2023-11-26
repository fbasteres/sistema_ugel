<?php

namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form\Form1;
use App\Models\Form\Form3;
use App\Models\Alm\Alm1;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        $user->load('roles');
        $totalForm1 = Form1::where('user_id', Auth::id())->count();
        $totalForm3 = Form3::where('user_id', Auth::id())->count();
        $totalAlm1 = Alm1::where('user_id', Auth::id())->count();
        
        return view('dashboard',[
            'totalForm1' => $totalForm1,
            'totalForm3' => $totalForm3,
            'totalAlm1'  => $totalAlm1,
            'user' => $user
        ]);
    }
    public function reporte()
    {
        abort_if(Gate::denies('fichas-reportes'), redirect()->route('inicio'));
        $totalForm1 = Form1::count('id');
        $totalForm3 = Form3::count('id');
        $totalAlm1 = Alm1::count('id');
        return view('pages.report', [
            'totalForm1' => $totalForm1,
            'totalForm3' => $totalForm3,
            'totalAlm1'  => $totalAlm1
        ]);
    }

}
