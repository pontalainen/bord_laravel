<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'content',
        'image',
        'primary_card',
        'secondary_card'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
