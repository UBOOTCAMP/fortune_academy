<?php

namespace App\Models;

use App\Traits\FileHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    use FileHelper;

    protected $guarded = [];

    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'instructor_class');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'group_id');
    }
}
