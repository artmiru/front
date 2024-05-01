<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'date', 'time'];

    // Define relationship to teacher if you have a teacher model and if necessary
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
