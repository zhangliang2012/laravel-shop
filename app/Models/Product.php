<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'attr' => 'array',
    ];
//    public function setAttrAttribute($value)
//    {
//       (new App\Models\Product())->find(30)->toArray();
//        $this->attributes['attr'] = json_decode($value, true);
//    }
}
