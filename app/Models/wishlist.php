<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

     protected $fillable = [
        'api_tid',
        'user_id',
        'is_softdel',

        ];
}
