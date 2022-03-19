<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloqouent\Model\Course;
use Illuminate\Database\Eloqouent\Model\Department;
use Illuminate\Database\Eloqouent\Model\Faculty;

class Student extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'std_id','std_fname','std_lname','std_email','std_username','std_password','course_id','dept_id','faculty_id'
    ];

    public function Course(){
        return $this->belongsTo(Course::class);
    }
    public function Department(){
        return $this->belongsTo(Department::class);
    }
    public function Faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
