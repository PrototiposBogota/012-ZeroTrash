<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->toArray();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentType = DocumentType::all()->toArray();
        $rol = Roles::all()->toArray();
        $city = City::all()->toArray();
        return view('users.create', compact('documentType','rol','city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'type_identification' => $request->get('type_identification'),
            'identification' => $request->get('identification'),
            'genary' => $request->get('genary'),
            'rol_id' => $request->get('rol_id'),
            'id_city' => $request->get('id_cityr')
        ]);

        $users->save();
        return redirect('/users');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        $documentType = DocumentType::all()->toArray();
        $rol = Roles::all()->toArray();
        $city = City::all()->toArray();
        return view('users.edit', compact('documentType','rol', 'city', 'users', 'id'));
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
        $users = User::find($id);
        $users->name = $request->get('name');
        $users->email = $request->get('email');
        $users->type_identification = $request->get('type_identification');
        $users->identification = $request->get('identification');
        $users->genary = $request->get('genary');
        $users->rol_id = $request->get('rol_id');
        $users->id_city = $request->get('id_city');
        $users->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/users');
    }
}
