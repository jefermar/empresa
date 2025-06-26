<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    public function company() {
        return $this->belongsTo(Company::class);
    }
     public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }
     public function product() {
        return $this->belongsTo(Product::class);
    }
}
/*{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Product(){
        return $this->belongsTo(Product::class);
    }
    public function Warehouse(){
        return $this->belongsTo(Warehouse::class);
    }
} */