<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'category_id',
        'picture_name'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function preparation_steps(){
        return $this->hasMany(PreparationStep::class);
    }
    public function ingredients(){
        return $this->hasMany(Ingredient::class);
    }

    public function pic_url(){
        return asset('storage/images/' . $this->picture_name);
    }


}
