<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'slug', 'body'];



    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
