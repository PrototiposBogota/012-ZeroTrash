<?php

namespace App\Http\Controllers;

use App\Models\NoveltyType;
use App\Models\RecyclingInventory;
use App\Models\RecyclingType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class recyclingInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = RecyclingInventory::select('recycling_inventory.id', 'users.name','recycling_type.description','recycling_inventory.cantidad')
                                         ->join('users','users.id','=','recycling_inventory.id_user')
                                         ->join('recycling_type','recycling_type.id','=','recycling_inventory.id_recycling_type')
                                         ->get()
                                         ->toArray();
        //dd($inventory);
        return view('inventory.index', compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('id', '=',Auth::user()->id)->get();
        $recyclingType = RecyclingType::all();
        return view('inventory.create',  compact('users','recyclingType'));
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
    }
}
