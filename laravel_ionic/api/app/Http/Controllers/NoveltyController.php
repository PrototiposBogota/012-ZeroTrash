<?php

namespace App\Http\Controllers;

use App\Novelty;
use App\NoveltyType;
use App\User;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novelty = Novelty::all()->toArray();
        return view('novelty.index', compact('novelty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $noveltyType = NoveltyType::all();
        return view('novelty.create',  compact('users','noveltyType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novelty = new Novelty([
            'id_novelty_type' => $request->get('id_novelty_type'),
            'novelty' => $request->get('novelty'),
            'id_user' => $request->get('id_user'),
            'id_car' => $request->get('id_car')
        ]);

        $novelty->save();
        return redirect('/novelty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $novelty = Novelty::find($id);
        return view('novelty.edit', compact('novelty','id'));
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
        $novelty = Novelty::find($id);
        $novelty->id_novelty_type = $request->get('id_novelty_type');
        $novelty->novelty = $request->get('novelty');
        $novelty->id_user = $request->get('id_user');
        $novelty->id_car = $request->get('id_car');
        $novelty->save();
        return redirect('/novelty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novelty = Novelty::find($id);
        $novelty->delete();

        return redirect('/novelty');
    }

}
