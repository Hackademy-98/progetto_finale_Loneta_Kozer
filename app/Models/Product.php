<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','description','price','img','category_id','product_id'];
    public function categories(){
      return $this->belongsToMany(Category::class);
    }
     public function user(){
        return $this->belongsTo(User::class);
     }
 
}
