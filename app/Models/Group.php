<?php

namespace App\Models;

use App\Traits\FileHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    use FileHelper;

    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_group');
    }

}
