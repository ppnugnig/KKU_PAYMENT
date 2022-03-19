<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloqouent\Model\Student;
use Illuminate\Database\Eloquent\softDeletes;


class Course extends Model
{
    use HasFactory;
    use softDeletes;

    public function Students(){
        return $this->hasMany(Student::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class);
    }
}
