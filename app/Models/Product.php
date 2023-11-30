<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','description','price','img'];
     public function user(){
        return $this->belongsTo(User::class);
     }
}
