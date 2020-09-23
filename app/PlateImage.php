<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlateImage extends Model
{
    protected $fillable = [
        'plate_id', 'media_url', 'is_deleted', 'is_active',
    ];

    
}
