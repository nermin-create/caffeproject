<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer extends Model
{
    use HasFactory,SoftDeletes;
    protected $table="Customers" ;
    protected $fillable=['name','email'] ;

    public function orders(){
       return $this->hasMany(Order::class);
    }
   
    
}
