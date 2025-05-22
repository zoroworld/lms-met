<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;


    protected $table = 'teachers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email_id',
        'mobile_no',
        'status',
        'institute_code',
    ];
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_code', 'institute_code');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subjects', 'teacher_id', 'subject_id');
    }
    public function roles()
    {
        return $this->hasMany(TeacherRole::class, 'teacher_id');
    }
    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'teacher_id', 'id');
    }
}