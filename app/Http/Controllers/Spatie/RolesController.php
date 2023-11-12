<?php

namespace App\Http\Controllers\Spatie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('Conf-roles'), redirect()->route('inicio'));
        $roles = Role::all();
        return view('auth.Spatie.Roles.index', compact ('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('Conf-roles'), redirect()->route('inicio'));
        $permissions = Permission::all()->pluck('name','id');
        return view('auth.Spatie.Roles.create', compact ('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('Conf-roles'), redirect()->route('inicio'));
        $role = Role::create($request->only('name'));
        $role->permissions()->sync($request-> input('permissions',[]));
        return redirect()->route('roles.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        abort_if(Gate::denies('Conf-roles'), redirect()->route('inicio'));
        $role->load('permissions');
        return view('auth.Spatie.Roles.show', compact ('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        abort_if(Gate::denies('Conf-roles'), redirect()->route('inicio'));
        $permissions = Permission::all()->pluck('name','id');
        $role->load('permissions');
        return view('auth.Spatie.Roles.edit', compact ('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        $role->permissions()->sync($request->input('permissions', []));
        return redirect()->route('roles.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success','Eliminado Correctamente');
    }
}
