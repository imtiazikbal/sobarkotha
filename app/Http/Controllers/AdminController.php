<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
       $users =  User::all();
        return view('backend.role.index',compact('users'));
    }
    function create(){

        return view('backend.role.create');
        
    }
    function store(Request $request){
    
//dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
            'role' => ['required']
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=>$request->role
        ]);
        return redirect()->route('role.index')->with('success', 'User created successfully.');
       
    }
    
    function edit(User $role){
     

        return view('backend.role.edit',compact('role'));
    }


    function update(Request $request,User $role){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'role' => ['required']
        ]);
        $role->update([
            'name' => $request->name,
            'email' => $request->email,
            'role'=>$request->role
        ]);
        return redirect()->route('role.index')->with('success', 'User updated successfully.');
    }
    function destroy(User $role){

        $role->delete();
        return redirect()->route('role.index')->with('success', 'User deleted successfully.');
    }
}
