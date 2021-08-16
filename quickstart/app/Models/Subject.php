<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'major',
        'subject_code',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'subject_student', 'student_id', 'subject_id');
    }
}
