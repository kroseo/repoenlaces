<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Imports\UserImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

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
            ->orderBy('email', 'asc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    public function searchByName(Request $request) {
        $user = User::findOrFail($request->id);
        //dd($request->title);
        $users = User::where('email','LIKE','%'.$request->email.'%@cpilosenlaces.com')
            ->orderBy('email', 'asc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    public function importCSV(Request $request)
    {
        $user = User::findOrFail($request->id);

        $request->validate([
            'document_csv'=>'required|mimes:csv|max:2048'
        ]);

        $file = $request->file('document_csv');
        Excel::import(new UserImport, $file);

        $users = User::orderBy('name','asc')
            ->orderBy('email','asc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->id);
        User::create([
            'name' => $request->input('department'),
            'email' => $request->input('email').'@cpilosenlaces.com',
            'password' => Hash::make('losenlaces')
        ]);

        $users = User::orderBy('name','asc')
            ->orderBy('email','asc')->get();
        return view('admin.users', compact('user', 'users'));
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
    public function edit(string $user_id, string $username_id)
    {
        $user = User::findOrFail($user_id);
        $username = User::find($username_id);
        return view('admin.edituser', compact('user', 'username'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id, string $username_id)
    {
        $user = User::findOrFail($request->id);
        $username = User::find($username_id);
        $username->update([
            'name' => $request->input('department'),
            'email' => $request->input('email').'@cpilosenlaces.com'
        ]);

        $users = User::orderBy('name','asc')
            ->orderBy('email','asc')->get();
        return view('admin.users', compact('user', 'users'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $user_id, string $username_id)
    {
        $user = User::findOrFail($user_id);
        $username = User::find($username_id);
        $username->delete();

        $users = User::orderBy('name','asc')
            ->orderBy('email','asc')->get();
        return view('admin.users', compact('user', 'users'));
    }
}
