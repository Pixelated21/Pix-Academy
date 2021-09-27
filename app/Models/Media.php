<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Media
 *
 * @property int $media_id
 * @property int $student_id
 * @property string $profile_pic
 * @property string $cover_pic
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Student $student
 * @method static Builder|Media newModelQuery()
 * @method static Builder|Media newQuery()
 * @method static Builder|Media query()
 * @method static Builder|Media whereCoverPic($value)
 * @method static Builder|Media whereCreatedAt($value)
 * @method static Builder|Media whereMediaId($value)
 * @method static Builder|Media whereProfilePic($value)
 * @method static Builder|Media whereStudentId($value)
 * @method static Builder|Media whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Media extends Model
{
    use HasFactory;

    protected $primaryKey = "media_id";
    protected $table = "media";

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
