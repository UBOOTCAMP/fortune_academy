<?php

namespace App\Models;

use App\Traits\FileHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use FileHelper;

    protected $guarded = [];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function promo()
    {
        return $this->belongsToMany(PromoCode::class, 'promo_code_class')->whereStatus(1);
    }
}
