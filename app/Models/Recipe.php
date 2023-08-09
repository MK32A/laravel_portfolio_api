<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time',
        'price',
        'filename'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}