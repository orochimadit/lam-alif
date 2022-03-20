<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id','img','sound','description'];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
