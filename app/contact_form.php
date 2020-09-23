<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_form extends Model
{
     protected $fillable = [
        'title','first_name','surname','email', 'telephone','message'
    ];
}
