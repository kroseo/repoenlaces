<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('admin.users', compact('user'));
    }

    public function allUsers(Request $request)
    {
        $user = User::findOrFail($request->id);
        $users = User::orderBy('name','asc')
            ->orderBy('email','asc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    public function searchByDepartment(Request $request) {
        $user = User::findOrFail($request->id);
        //dd($request->ciclo);
        $users = User::where('name','=',$request->departamento)
            ->orderBy('email', 'desc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
