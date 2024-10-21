<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    // Update the fillable property to include the new columns
    protected $fillable = [
        'name', 
        'prenom', 
        'email', 
        'phone', 
        'address', 
        'commune', 
        'sexe', 
        'date_naissance', 
        'prenom_pere', 
        'prenom_mere', 
        'nom_mere', 
        'wilaya_id', 
        'formation_id', 
        'type_formation'
    ];

    /**
     * Relationship with Wilaya.
     */
    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    /**
     * Relationship with Formation.
     */
    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }
}
