<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['category', 'author'];

    public function category(): BelongsTo
    {
        // hasOne, hasMany, blongsTo...
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo // user_id
    {
        // hasOne, hasMany, blongsTo...
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo // user_id
    {
        // hasOne, hasMany, blongsTo...
        return $this->belongsTo(Author::class);
    }
}
