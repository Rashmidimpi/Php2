<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;
// use App\Models\home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();

        return view('homes.index', compact('homes'));
        return hello;
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            
        ]);

        $home = new Home([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'street' => $request->get('street'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'zip' => $request->get('zip')
        ]);
        $home->save();
        return redirect('/homes')->with('success', 'Saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    // public function show(home $home)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = Home::find($id);
        return view('homes.edit', compact('home')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            
        ]);

        $home = Home::find($id);
        $home->firstname =  $request->get('firstname');
        $home->lastname = $request->get('lastname');
        $home->street = $request->get('street');
        $home->city = $request->get('city');
        $home->state = $request->get('state');
        $home->zip = $request->get('zip');
        $home->save();

        return redirect('/contacts')->with('success', 'updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();

        return redirect('/homes')->with('success', 'deleted!');
    }
}

