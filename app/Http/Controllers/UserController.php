<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use App\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name', 'desc')->paginate(10);
        return \View::make('admin.tableUser')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('admin.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = Hash::make($request->input('password'));
        $user = User::create($validatedData);

        $registro = new UserData;
        $id_u = DB::select('select last_insert_id() as id_user');
        $user_id = $id_u[0]->id_user;
        $registro->user_id = $user_id;
        $registro->save();

        //$id_u = DB::select('select last_insert_id() as id_user');
        return redirect('/users')->with('success_msg', 'Datos registrados');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return \View::make('admin.editUser')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($request->input('password'));
        $user = User::find($id);
        $user->update($validatedData);
        return redirect('/users')->with('success_msg', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('/users')->with('success_msg', 'Registro eliminado correctamente');
    }
}
