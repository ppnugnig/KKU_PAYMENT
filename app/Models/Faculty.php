<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Faculty extends Model
{
    use HasFactory;
    use softDeletes;

    public function Departments(){
        return $this->hasMany(Department::class);
    }
    public function Students(){
        return $this->hasMany(Student::class);
    }
}
