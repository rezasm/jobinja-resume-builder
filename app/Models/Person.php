<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';
    protected $guarded = [];

    public function jobs(){
        return $this->hasMany(Job::class,'person_id');
    }

    public function educations(){

        return $this->hasMany(Education::class,'person_id');
    }


    public function languages(){


        return $this->hasMany(Language::class,'person_id');

        
    }

    public function getMarriedAttribute()  
    {
        return ($this->married = 1) ? 'متاهل' : 'مجرد';
         

 
    }

}
