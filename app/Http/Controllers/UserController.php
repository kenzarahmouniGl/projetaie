<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Collections;
use Illuminate\View\View;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $users = User::all();
        return view('admin.users.index')->with('users',$users);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
      
        //return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
           // $collection = Collections::create($request->all());
        
           // return redirect()->route('users.index')->with('success', 'Product created successfully.');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        
        $users =User::find($id);
        return view('admin.users.show')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $users =User::find($id);
        return view('admin.users.edit')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('users')->with('flash_message', 'userss Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('users')->with('flash_message', 'user deleted!');
    }
}
