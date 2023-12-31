<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class CategoryAge extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'filename'
    ];

    public function recipe()
    {
        return $this->hasMany(Recipe::class);
    }
}
