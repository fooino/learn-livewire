<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    protected static $unguarded = ['id'];


    protected $casts = [
        'published'     => 'boolean',
        'notifications' => 'array'
    ];


    public function scopeSearch(Builder $query, string|null $searched = null)
    {
        if (filled($searched)) {
            $query
                ->where('title', 'LIKE', "%{$searched}%")
                ->where('content', 'LIKE', "%{$searched}%");
        }
    }
}
