<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = "course_id";
    protected $table = "courses";

    public function institution(){
        return $this->belongsTo(Institution::class);
    }
}
