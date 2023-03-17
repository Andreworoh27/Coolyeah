<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class, "user_id", "user_id");
    }
    public function course()
    {
        $this->belongsTo(Course::class, "course_id", "course_id");
    }
}
