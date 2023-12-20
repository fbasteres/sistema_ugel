<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newpass()
    {
        return view('auth.passwords.newpassword');
    }

    /**
     * Update the specified resource in storage.
     */
    public function changepass(PasswordRequest $request)
    {
        
            if (Hash::check($request->password_actual, Auth::user()->password)){
                if($request->newPassword == $request->confirmar_password){
                    if(strlen($request->newPassword) >= 6){
                        Auth::user()->password = bcrypt($request->newPassword);
                        User::where('id', Auth::user()->id)
                        ->update(['password' => bcrypt($request->newPassword)]);
                        return redirect()->route('inicio')->with('success','Contraseña cambiada correctamente.');
                    }else{
                        return redirect()->route('password.edit')->with('success','Contraseña no cumple con parametros.');
                    }
                }else{
                    return redirect()->route('password.edit')->with('error_','Contraseñas no coinciden');
                }
            }else{
                return redirect()->route('password.edit')->with('err','Contraseña incorrecta.');
            }
        
    }
}
