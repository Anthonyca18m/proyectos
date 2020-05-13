<?php

namespace proyect_one\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use proyect_one\Http\Controllers\Controller;
use proyect_one\User;
use Carbon\Carbon;
use Intervention\Image\Image;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }
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

    public function profile()
    {
        //
        return auth('api')->user();
    }

    public function updateProfile(Request $request){

        $user = auth('api')->user();

        $this->validate($request, [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|string|max:50|min:7|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|max:20|min:8',
            // 'type' => 'required|string|min:1'
        ]);

        if (!empty($request->password)) {
            $request->merge(['password' => Hash::make($request['password'])]);
        }

        $currentPhoto = $user->photo;

        if ($request->photo != $currentPhoto) {
            $name = time(). '.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];

            \Image::make($request->photo)->save(public_path('img/profile/').$name);

            $request->merge(['photo' => $name]);
        }

        $user->update($request->all());

        return ['message' => 'Success'];
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
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|string|max:50|min:7|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|max:20|min:8',
            'type' => 'required|string|min:1'
        ]);

        $user->update( $request->all() );

        return[ "message" => "Actualizado" ];
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
