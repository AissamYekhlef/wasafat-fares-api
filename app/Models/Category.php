<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Category extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

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
