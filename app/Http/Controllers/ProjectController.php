<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::findOrFail($request->id);
        $projects = Project::where('departamento','=',$user->name)
            ->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
    }

    public function searchByGrade(Request $request) {
        $user = User::findOrFail($request->id);
        //dd($request->ciclo);
        $projects = Project::where('departamento','=',$user->name)
            ->where('ciclo','=',$request->ciclo)
            ->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
    }

    public function searchByTitle(Request $request) {
        $user = User::findOrFail($request->id);
        //dd($request->title);
        $projects = Project::where('departamento','=',$user->name)
            ->where('titulo','LIKE','%'.$request->title.'%')
            ->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
    }

    public function searchByKeyword(Request $request) {
        $user = User::findOrFail($request->id);
        //dd($request->keyword);
        //dd($user->name);
        $projects = Project::where('departamento','=',$user->name)
            ->where(function ($query)  use ($request) {
                $query->where('clave1','LIKE','%'.$request->keyword.'%')
                    ->orWhere('clave2','LIKE','%'.$request->keyword.'%')
                    ->orWhere('clave3','LIKE','%'.$request->keyword.'%');
            })
            ->orderBy('curso', 'desc')->get();
        return view('user.index', compact('user', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = User::findOrFail($request->id);
        $projects = Project::where('departamento','=',$user->name)->get();
        return view('user.newproject', compact('user', 'projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->id);
        Project::create([
            'titulo' => $request->input('title'),
            'departamento' => $user->name,
            'ciclo' => $request->input('grade'),
            'autor' => $request->input('author'),
            'email' => $request->input('email'),
            'resumen' => $request->input('resume'),
            'curso' => $request->input('year'),
            'clave1' => $request->input('key1'),
            'clave2' => $request->input('key2'),
            'clave2' => $request->input('key2'),
            'tema' => $request->input('theme'),
            'enlace' => $request->input('link'),
            'comentarios' => $request->input('comments')
        ]);

        $projects = Project::where('departamento','=',$user->name)->get();

        return view('user.index', compact('user', 'projects'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id, string $project_id)
    {
        $user = User::findOrFail($user_id);
        $project = Project::find($project_id);

        return view('user.projectdetail', compact('user', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $user_id, string $project_id)
    {
        $user = User::findOrFail($user_id);
        $project = Project::find($project_id);
        return view('user.editproject', compact('user', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id, string $project_id)
    {
        $user = User::findOrFail($user_id);
        $project = Project::find($project_id);
        $project->update([
            'titulo' => $request->input('title'),
            'departamento' => $user->name,
            'ciclo' => $request->input('grade'),
            'autor' => $request->input('author'),
            'email' => $request->input('email'),
            'resumen' => $request->input('resume'),
            'curso' => $request->input('year'),
            'clave1' => $request->input('key1'),
            'clave2' => $request->input('key2'),
            'clave2' => $request->input('key2'),
            'tema' => $request->input('theme'),
            'enlace' => $request->input('link'),
            'comentarios' => $request->input('comments')
        ]);

        $projects = Project::where('departamento','=',$user->name)->get();

        return view('user.index', compact('user', 'projects'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
