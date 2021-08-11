<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apidata extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_slug',
        'description',
        'summary',
        'cpv',
        'cpvjson', 
        'location',
        'location2',
        'published_date',
        'oicd',
        'tid',
        'price',
        'min_price',
        'currency',
        'buyer_location',
        'buyer_postal_code',
        'buyer_region',
        'status',
        'tag',
        'buyer_name_1',
        'buyer_name_2',
        'supplier_name',
        'api_type',
        'object',
        'tender_id',
        'initiation_time',
        'api_url',
        'page_size',
        'page_number',
        'is_softdel',

        ];

        protected $table="apidata";
}

