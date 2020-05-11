<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [

    ];

    // Relasi dengan table transaction_details
   public function details()
   {
       return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
   }

    // Relasi dengan table travel_packages
    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    // Relasi dengan table users
   public function user()
   {
       return $this->belongsTo(User::class, 'users_id', 'id');
   }

   
};
