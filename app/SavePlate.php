<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavePlate extends Model
{
    protected $fillable = [
        'user_id', 'plate_id', 'status', 'guest_id'
    ];

    // Relations with user Model
    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    // Relations with plate Model
    public function plate()
    {
        return $this->belongsTo('App\Plate','plate_id','id');
    }

    public function plateimage()
    {
        return $this->belongsTo('App\PlateImage','plate_id','id');
    }

    
}
