<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [
        'rollno',
        'Fname',
        'Mname',
        'Lname',
        'dob',
        'gender',
        'admission_year',
        'cast_category',
        'address',
        'email',
        'blood_group',
        'mobile_no',
        'photo',
        'abc_id'
    ];

    protected $dates = ['dob']; // Define columns that should be treated as dates

    public function educations()
    {
        return $this->hasMany(Education::class, 'rollno', 'rollno');
    }
}
