<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
     public function peoples() {
        return $this->hasMany(People::class);
    }
     public function suppliers() {
        return $this->hasMany(Supplier::class);
    }
    public function applications(){
        return $this->hasMany(Application::class);
    }
    public function products() {
        return $this->hasMany(Product::class);
    }
    public function stocks() {
        return $this->hasMany(Stock::class);
    }
    public function warehouses() {
        return $this->hasMany(Warehouse::class);
    }
}
/*
{
    public function Suppliers(){
        return $this->hasMany(Supplier::class);
    }
    public function Users(){
        return $this->hasMany(User::class);
    }
    public function Applications(){
        return $this->hasMany(Application::class);
    }
    public function Products(){
        return $this->hasMany(Product::class);
    }
    public function Warehouses(){
        return $this->hasMany(Warehouse::class);
    }
    public function Stokes(){
        return $this->hasMany(Stoke::class);
    }
} */