<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['subject_name', 'status', 'institute_code', 'subject_code', 'subject_description'];

    protected $casts = [
        'status' => 'string', // Can be 'active' or 'inactive'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_subject', 'subject_id', 'course_id');
    }
    // If you have a Meeting model and store 'meeting'

    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'subject_id', 'id');
    }


}