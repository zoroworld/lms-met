<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = [
        'institute_code',
        'institute_name',
        'institute_address',
        'status',
    ];
    //If you have a Meeting model and store 'meeting' by institute code
    public function meetings()
    {
        return $this->hasMany(Meeting::class, 'institute_code', 'institute_code');
    }
}
