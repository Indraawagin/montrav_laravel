<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id' , 'image'
    ];

    protected $hidden = [

    ];

// Relasi dengan table travel_packages
   public function travel_package()
   {
       return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
   }

};
