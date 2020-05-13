<?php

namespace proyect_one\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use proyect_one\Http\Controllers\Controller;
use proyect_one\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|string|max:50|min:7|unique:users',
            'password' => 'required|string|max:20|min:8',
            'type' => 'required|string|min:1'
        ]);

        return User::create([
            'name' =>  $request['name'],
            'email' =>  $request['email'],
            'type' =>  $request['type'],
            'bio' =>  $request['bio'],
            'photo' =>  $request['photo'],
            'password' =>  Hash::make($request['password']),
            'created_at' => Carbon::now()
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);

        // delete the user
        $user->delete();

        return ['message' => 'Usuario eliminado'];
    }
}
