<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function preparation_steps(){
        return $this->hasMany(PreparationStep::class);
    }
    public function ingredients(){
        return $this->belongsTo(Ingredient::class);
    }


}
