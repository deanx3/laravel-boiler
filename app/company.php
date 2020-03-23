<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class company extends Eloquent
{
    //
    protected $fillable =
    [
        'Destination', 'Days' , 'Date' , 'Pickup_time' , 'Price' , 'Description'
    ];
}
