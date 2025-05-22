<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'meeting_subject',
        'meeting_date',
        'meeting_time',
        'meeting_link',
        'course_id',
        'subject_id',
        'teacher_id',
        'status',
        'institute_code'
    ];

    protected $casts = [
        'status' => 'string',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Trainer::class, 'teacher_id');
    }
    
}