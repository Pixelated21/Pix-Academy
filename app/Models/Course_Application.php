<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Course_Application
 *
 * @property int $course_applicants_id
 * @property int $course_id
 * @property int $student_id
 * @property string $payment_status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Course $course
 * @property-read Collection|Student[] $student
 * @property-read int|null $student_count
 * @method static Builder|Course_Application newModelQuery()
 * @method static Builder|Course_Application newQuery()
 * @method static Builder|Course_Application query()
 * @method static Builder|Course_Application whereCourseApplicantsId($value)
 * @method static Builder|Course_Application whereCourseId($value)
 * @method static Builder|Course_Application whereCreatedAt($value)
 * @method static Builder|Course_Application wherePaymentStatus($value)
 * @method static Builder|Course_Application whereStudentId($value)
 * @method static Builder|Course_Application whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Course_Application extends Model
{
    use HasFactory;

    protected $primaryKey = "course_applicants_id";
    protected $table = "course_applications";

    protected $fillable = [
        'student_id',
        'course_id',
        'payment_status',
        'status'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class, "student_id", "student_id")->with(["media", "users", "payment_info"]);
    }
}
