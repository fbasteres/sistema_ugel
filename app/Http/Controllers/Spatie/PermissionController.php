<?php

namespace App\Http\Controllers\Spatie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('Conf-permisos'), redirect()->route('inicio'));
        $permissions = Permission::all();
        return view('auth.Spatie.Permissions.index', compact ('permissions'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('Conf-permisos'), redirect()->route('inicio'));
        return view('auth.Spatie.Permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('Conf-permisos'), redirect()->route('inicio'));
        Permission::create($request->only('name'));
        return redirect()->route('permissions.index')->with('success','Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        abort_if(Gate::denies('Conf-permisos'), redirect()->route('inicio'));
        return view('auth.Spatie.Permissions.show', compact ('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('Conf-permisos'), redirect()->route('inicio'));
        return view('auth.Spatie.Permissions.edit', compact ('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->only('name'));
        return redirect()->route('permissions.index')->with('success','Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('success','Eliminado Correctamente');
    }
}
