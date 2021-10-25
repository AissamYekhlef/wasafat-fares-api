<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Dish extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

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
        return $this->hasMany(PreparationStep::class)->orderBy('order');
    }
    public function ingredients(){
        return $this->hasMany(Ingredient::class)->orderBy('order');
    }

    public function pic_url(){
        return asset('storage/images/' . $this->picture_name);
    }


}
