<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savedsearch extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'search_field_slug',
        'price_range',
        'location_slugs',
        'keyword',
        'is_softdel',

        ];
}
