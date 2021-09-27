<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\User_Activity
 *
 * @property int $user_activity_id
 * @property int $student_id
 * @property string $activity_type
 * @property string $previous_value
 * @property string $updated_value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User_Activity $User_Activity
 * @method static Builder|User_Activity newModelQuery()
 * @method static Builder|User_Activity newQuery()
 * @method static Builder|User_Activity query()
 * @method static Builder|User_Activity whereActivityType($value)
 * @method static Builder|User_Activity wherePreviousValue($value)
 * @method static Builder|User_Activity whereUpdatedValue($value)
 * @method static Builder|User_Activity whereCreatedAt($value)
 * @method static Builder|User_Activity whereUserActivityId($value)
 * @method static Builder|User_Activity whereStudentId($value)
 * @method static Builder|User_Activity whereUpdatedAt($value)
 * @mixin Eloquent
 */
class User_Activity extends Model
{
    use HasFactory;

    protected $primaryKey = "user_activity_id";
    protected $table = "user_activity";

    protected $fillable = [
      "student_id",
      'activity_type',
      'previous_value',
      'updated_value'
    ];

    public function payment_activity()
    {
        return $this->belongsTo(Payment_info::class);
    }

    public function student() {
        return $this->belongsTo(Student::class,"student_id","student_id")->with("users","media");
    }
}
