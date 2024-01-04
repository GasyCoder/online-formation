<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecon extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'titre',
        'slug',
        'contenu',
        'ordre',
        'video',
        'pdf',
        'ppt',
        'doc',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
