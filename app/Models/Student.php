<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'status',
        'institute_code',
        'created_at',
        'updated_at',
    ];

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_code', 'institute_code');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_student', 'student_id', 'course_id');
    }
    public function attendance()
    {
        return $this->hasMany(StudentAttendance::class, 'student_id', 'id');
    }
    

}