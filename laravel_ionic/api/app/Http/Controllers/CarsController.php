<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Locality;
use App\User;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all()->toArray();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locality = Locality::all();
        $users = User::all();
        return view('cars.create', compact('locality','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cars = new Cars([
            'description' => $request->get('description'),
            'mark' => $request->get('mark'),
            'capacity' => $request->get('capacity'),
            'id_locality' => $request->get('id_locality'),
            'id_user' => $request->get('id_user')
        ]);

        $cars->save();
        return redirect('/cars');
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
        $cars = Cars::find($id);
        $locality = Locality::all();
        $users = Users::all();
        return view('cars.edit', compact('cars','locality', 'users', 'id'));
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
        $cars = Cars::find($id);
        $cars->description = $request->get('description');
        $cars->mark = $request->get('mark');
        $cars->capacity = $request->get('capacity');
        $cars->id_locality = $request->get('id_locality');
        $cars->id_user = $request->get('id_user');
        $cars->save();
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();

        return redirect('/cars');
    }

}
