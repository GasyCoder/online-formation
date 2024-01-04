<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'cours_id',
        'titre',
        'description',
        'ordre',
    ];

    public function cours()
    {
        return $this->belongsTo(Cour::class);
    }

    public function lecons()
    {
        return $this->hasMany(Lecon::class);
    }
}
