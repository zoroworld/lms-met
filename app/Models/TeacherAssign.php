<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAssign extends Model
{
    use HasFactory;

    protected $table = 'teacher_assign';

    protected $fillable = [
        'institute_id',
        'course_id',
        'subject_id',
        'teacher_id',
        'status',
        'batch',
        'date',
        'start_time',
        'end_time',
        'status',
    ];

    // Relationships
    public function teacher()
    {
        return $this->belongsTo(Trainer::class, 'teacher_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');
    }

}
