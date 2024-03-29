<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('profiles.index')->with('profiles', Profile::all());
        $profiles = Profile::all();
        return view('profiles.index', ['profiles' => $profiles]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.show', ['profile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|max:30',
            'surname' => 'required|max:30',
            'age' => 'required|integer',
            'favouriteTeam' => 'required|max:50',
            'email' => 'required|max:30',
        ]);

        $p1 = new Profile;
        $p1 -> firstName = $validatedData['firstName'];
        $p1 -> surname = $validatedData['surname'];
        $p1 -> age = $validatedData['age'];
        $p1 -> favouriteTeam = $validatedData['favouriteTeam'];
        $p1 -> email = $validatedData['email'];
        $p1 -> save();

        session()->flash('message', 'Profile was created.');
        return redirect()->route('profiles.index');
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
