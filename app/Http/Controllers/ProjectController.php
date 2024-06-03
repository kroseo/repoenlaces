<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::findOrFail($request->id);
        $projects = Project::where('departamento','=',$user->name)->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
    }

    public function searchByGrade(Request $request) {
        $user = User::findOrFail($request->id);
        $projects = Project::where('departamento','=',$user->name)
            ->where('ciclo',$request->ciclo)
            ->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
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
