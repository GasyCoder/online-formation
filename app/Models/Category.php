<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_path'
    ];

    public function cour()
    {
        return $this->hasMany(Cour::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
