<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = [
        "name",
        "picture_name",
    ];

    public function dishes(){
        return $this->hasMany(Dish::class);
    }

    public function pic_url(){
        return asset('storage/images/' . $this->picture_name);
    }

}
