<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function suppliers() {
        return $this->hasMany(Supplier::class);
    }

    public function applications() {
        return $this->hasMany(Application::class);
    }
}

/* {
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function Suppliers(){
        return $this->hasMany(Supplier::class);
    }
    public function Applications(){
        return $this->hasMany(Application::class);
    }*/