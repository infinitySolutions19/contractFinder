<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersubscription extends Model
{
    use HasFactory;

     protected $fillable = [
           'user_id',
           'package_id',
           'package_start_date',
           'package_end_date',
           'renewal_mode',
           'is_softdel',

        ];
}
