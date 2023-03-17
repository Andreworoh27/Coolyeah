<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function userCourse()
    {
        $this->hasMany(userCourse::class, "course_id", "course_id");
    }
    public function courseSessions()
    {
        $this->hasMany(courseSessions::class, "session_id", "session_id");
    }
}
