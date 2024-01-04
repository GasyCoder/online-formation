<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'sub_title',
        'uuid',
        'slug',
        'description',
        'contenu',
        'categorie_id',
        'niveau',
        'duree',
        'prix',
        'image_cours',
        'video_intro',
        'date_start',
        'date_end',
        'formateur_id',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function getKeyName()
    {
        return 'uuid';
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];
}
