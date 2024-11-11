<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Article;

class Author extends Model
{
    use HasFactory;
    // artinya yang bisa diisi
    protected $fillable = [
        'name',
        'photo',
        'specialist'
    ];

    public function articles() : HasMany
    {
        return $this->hasMany(Article::class);
    }
}
