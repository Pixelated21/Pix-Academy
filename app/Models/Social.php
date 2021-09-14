<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $primaryKey = "social_media_id";
    protected $table = "social_media";

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
