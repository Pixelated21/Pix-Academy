<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = "student_id";
    protected $table = "students";

public function users(){
    return $this->belongsTo(User::class);
}
public function media(){
    return $this->hasMany(Media::class);
}
}
