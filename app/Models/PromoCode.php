<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    protected $table = 'promo_codes';
    protected $guarded = [];

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'promo_code_class');
    }
}
