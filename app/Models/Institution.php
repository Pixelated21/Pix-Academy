<?php

namespace App\Models;

use App\Http\Controllers\Courses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $primaryKey = "institution_id";
    protected $table = "institutions";

    public function courses(){
        return $this->hasMany(Courses::class);
    }

}
