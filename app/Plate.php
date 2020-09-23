<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
     protected $fillable = [
        'plate_number', 'plate_title', 'plate_price', 'vehicle_cat','media_url','description', 'user_id','is_featured', 'top','trending', 'is_deleted', 'is_publised',
    ];

    // Relations with User Model
    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    // Relations with Plate Model
    public function plateimage()
    {
        return $this->hasOne('App\PlateImage','plate_id','id');
    }

    public function saveplate()
    {
        return $this->belongsTo('App\SavePlate','plate_id','id');
    }
}
