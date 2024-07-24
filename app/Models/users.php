<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table ="users";
    // public function posts(){
    //     return $this->hasMany(post::class);
    // }
}
