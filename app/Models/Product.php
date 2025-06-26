<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
      public function company() {
        return $this->belongsTo(Company::class);
    }
     public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
     public function stocks() {
        return $this->hasMany(Stock::class);
    }
}
/* {
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function Stokes(){
        return $this->hasMany(Stoke::class);
    }
} */