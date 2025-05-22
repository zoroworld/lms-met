<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'course_name',
        'course_code',
        'course_type',
        'course_duration',
        'course_fee',
        'course_description',
        'description',          // additional notes
        'course_start_date',
        'course_end_date',
        'status',
        'institute_code',
    ];

    /**
     * Default attribute values.
     */
    protected $attributes = [
        'status' => 'inactive',
    ];

    /**
     * Cast dates and numeric types.
     */
    protected $casts = [
        'course_duration'     => 'integer',
        'course_fee'          => 'decimal:2',
        'course_start_date'   => 'date',
        'course_end_date'     => 'date',
    ];

    /**
     * Scope to filter active courses.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Always store course_name lowercased;
     * Always retrieve it as title-cased.
     */
    public function getCourseNameAttribute($value)
    {
        return ucwords($value);
    }

    public function setCourseNameAttribute($value)
    {
        $this->attributes['course_name'] = strtolower($value);
    }

    /**
     * Relationships
     */
    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_code', 'institute_code');
    }

    // If you have a Subject model and store 'subject' 
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'course_subject', 'course_id', 'subject_id');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }

    // If you have a Meeting model and store 'meeting'
    public function meetings(): HasMany
    {
        return $this->hasMany(Meeting::class, 'course_id', 'id');
    }
    public function attendance(): HasMany
    {
        return $this->hasMany(StudentAttendance::class, 'course_id', 'id');
    }


    
}
