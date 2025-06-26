<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
     public function company() {
        return $this->belongsTo(Company::class);
    }
     public function person() {
    return $this->belongsTo(Person::class);
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