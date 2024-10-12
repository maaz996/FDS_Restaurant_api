<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'location', 'contact'];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
