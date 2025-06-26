<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
     public function companies() {
        return $this->belongsTo(Company::class);
    }
     public function peoples() {
        return $this->belongsTo(People::class);
    }
}
/*{
    public function Company(){
        return $this->belongsTo(Company::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    
} */