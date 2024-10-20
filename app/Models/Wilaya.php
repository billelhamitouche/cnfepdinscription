<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $fillable = ['name'];

    public function stagiaires()
    {
        return $this->hasMany(Stagiaire::class);
    }
}

