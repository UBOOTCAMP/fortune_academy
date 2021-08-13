<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class)->whereStatus(1);
    }

    public function classes() {
        return $this->hasMany(Classes::class)->whereStatus(1);
    }
}
