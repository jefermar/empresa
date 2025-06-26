<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    //
     public function company() {
        return $this->belongsTo(Company::class);
    }
     public function stoks() {
        return $this->hasMany(Stock::class);
    }
}
/*{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Stokes(){
        return $this->hasMany(Stoke::class);
    }
} */