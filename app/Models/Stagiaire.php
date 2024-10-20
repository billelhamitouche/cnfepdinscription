<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'address', 'wilaya_id', 'type_formation'];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }
}
