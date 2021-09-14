<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_info extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_info_id";
    protected $table = "payment_info";

    public function student() {
       return  $this->belongsTo(Student::class);
    }
}
