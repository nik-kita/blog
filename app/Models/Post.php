<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function owner() {
        return $this->belongsTo('App\Models\User');
    }

    protected $hidden = [
        'user_id',
    ];
}
