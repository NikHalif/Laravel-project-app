<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];

    /*public function imanges()
    {
        return $this->hasMany(Imange::class);
    }*/

}