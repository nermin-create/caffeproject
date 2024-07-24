<?php

namespace App\Models;
use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table="orders";

    
    public function customer(){                       //relation order with customer and customer is singular
        return  $this->belongsTo(Customer::class) ;        //customer class that is in customer model                       
                                                      
     }
     
}

