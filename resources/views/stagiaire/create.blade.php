<!-- resources/views/stagiaires/create.blade.php -->

@extends('layouts.form-layout')

@section('title', 'Inscription Stagiaire')

@section('content')
    <form method="POST" action="{{ route('stagiaires.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Téléphone" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <select class="form-select" id="sexe" name="sexe">
                    <option value="HOMME">HOMME</option>
                    <option value="FEMME">FEMME</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="address" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Adresse" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="birthdate" class="form-label">Date Naissance</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="commune" class="form-label">Commune</label>
                <input type="text" class="form-control" id="commune" name="commune" placeholder="Commune" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="father_name" class="form-label">Prénom Pere</label>
                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Prénom du père" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="mother_name" class="form-label">Nom Mère</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Nom de la mère" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="mother_firstname" class="form-label">Prénom Mère</label>
                <input type="text" class="form-control" id="mother_firstname" name="mother_firstname" placeholder="Prénom de la mère" required>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>
    </form>
@endsection
