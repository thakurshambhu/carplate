<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    protected $fillable = [
        'user_id','plate_id','title','first_name','last_name','email', 'phone_no', 'address1','address2', 'postal_code', 'city', 'state',  'country'
    ];

     // Relations with Plate Model
    public function plate()
    {
        return $this->belongsTo('App\Plate','plate_id','id');
    }

}
