<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        abort_if(Gate::denies('Conf-users'), redirect()->route('inicio'));
        $users = User::all();
        return view('auth.Users.index', compact ('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('Conf-users'), redirect()->route('inicio'));
        $roles = Role::all()->pluck('name','id');
        return view('auth.Users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        abort_if(Gate::denies('Conf-users'), redirect()->route('inicio'));
        $user = User::create($request->validated());

        $roles = $request->roles;
        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        abort_if(Gate::denies('Conf-users'), redirect()->route('inicio'));
        $user->load('roles');
        return view('auth.Users.show', compact ('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        abort_if(Gate::denies('Conf-users'), redirect()->route('inicio'));
        $roles = Role::all()->pluck('name','id');
        $user->load('roles');
        return view('auth.Users.edit', compact ('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->only('name','last_name','dni', 'email'));
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        if (auth()->user()->id == $user->id){
            return redirect()->route('users.index')->with('success','No permitido');
        }

        $user->delete();
        return redirect()->route('users.index')->with('success','Eliminado Correctamente');
    }
}
