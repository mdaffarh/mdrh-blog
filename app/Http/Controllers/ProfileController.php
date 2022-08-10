<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profile.index', [
            'profile' => User::firstWhere('username' , auth()->user()->username)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.profile.edit', [
            'user' => $user->firstWhere('username' , auth()->user()->username)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $users = $user->where('username' , $request->username);
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required',
            'image' => 'image|file|max:1024'
        ];

        if($request->username != auth()->user()->username){
            $rules['username'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('profile-picture');
        }

        // $validatedData['email'] = auth()->user()->email;
        // $validatedData['password'] = auth()->user()->password;
        // $validatedData['is_admin'] = auth()->user()->is_admin;

        User::where('id', auth()->user()->id)
            ->update($validatedData);
        
        return redirect('/dashboard/profile')->with('success','Your profile picture has been updated !');
    }

}