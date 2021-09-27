<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Social
 *
 * @property-read Student $student
 * @method static Builder|Social newModelQuery()
 * @method static Builder|Social newQuery()
 * @method static Builder|Social query()
 * @mixin Eloquent
 */
class Social extends Model
{
    use HasFactory;

    protected $primaryKey = "social_media_id";
    protected $table = "social_media";

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
