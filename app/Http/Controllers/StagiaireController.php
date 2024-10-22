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
            // Validation
            $validatedData = $request->validate([
                'name' => 'required|string',
                'prenom' => 'required|string',
                'phone' => 'required|string',
                'sexe' => 'required|string',
                'address' => 'required|string',
                'birthdate' => 'required|date',
                'commune' => 'required|string',
                'email' => 'required|email',
                'father_name' => 'required|string',
                'mother_name' => 'required|string',
                'mother_firstname' => 'required|string',
            ]);
        
            // Save the stagiaire
            Stagiaire::create($validatedData);
        
            return redirect()->route('stagiaires.create')->with('success', 'Stagiaire inscrit avec succès!');
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
