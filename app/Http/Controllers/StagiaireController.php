<?php

namespace App\Http\Controllers;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('stagiaires.create');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'birthdate' => 'required|date',
            'email' => 'required|email|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'mother_firstname' => 'required|string|max:255',
        ]);
        //

        Stagiaire::create([
            'name' => $request->input('name'),
            'prenom' => $request->input('prenom'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'commune' => $request->input('commune'),
            'sexe' => $request->input('sexe'),
            'birthdate' => $request->input('birthdate'),
            'email' => $request->input('email'),
            'father_name' => $request->input('father_name'),
            'mother_name' => $request->input('mother_name'),
            'mother_firstname' => $request->input('mother_firstname'),
        ]);
                // Redirect to a success page or return to the form with a success message

        return redirect()->back()->with('success', 'Stagiaire has been successfully registered.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
