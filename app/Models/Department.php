<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Department extends Model
{
    use HasFactory;
    use softDeletes;

    public function Courses(){
        return $this->hasMany(Course::class);
    }
    public function Faculty(){
        return $this->belongTo(Faculty::class);
    }
    public function Students(){
        return $this->hasMany(Student::class);
    }
}
