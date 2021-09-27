<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Course
 *
 * @property int $course_id
 * @property int $institution_id
 * @property string $course_nm
 * @property string $course_desc
 * @property string $training_start
 * @property string $training_end
 * @property integer $price
 * @property string $award_type
 * @property string $course_img
 * @property string $training_type
 * @property string $format
 * @property string $modality
 * @property int $amt_enrolled
 * @property int $capacity
 * @property string $status
 * @property int $views
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Course_Application[] $course_application
 * @property-read int|null $course_application_count
 * @property-read Institution $institution
 * @method static Builder|Course newModelQuery()
 * @method static Builder|Course newQuery()
 * @method static Builder|Course query()
 * @method static Builder|Course whereAmtEnrolled($value)
 * @method static Builder|Course whereAwardType($value)
 * @method static Builder|Course whereCapacity($value)
 * @method static Builder|Course whereCourseDesc($value)
 * @method static Builder|Course whereCourseId($value)
 * @method static Builder|Course whereCourseImg($value)
 * @method static Builder|Course whereCourseNm($value)
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereFormat($value)
 * @method static Builder|Course whereInstitutionId($value)
 * @method static Builder|Course wherePrice($value)
 * @method static Builder|Course whereModality($value)
 * @method static Builder|Course whereStatus($value)
 * @method static Builder|Course whereTrainingEnd($value)
 * @method static Builder|Course whereTrainingStart($value)
 * @method static Builder|Course whereTrainingType($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @method static Builder|Course whereViews($value)
 * @mixin Eloquent
 */
class Course extends Model
{
    use HasFactory;

    protected $primaryKey = "course_id";
    protected $table = "courses";

    protected $fillable = [
      'institution_id',
      'course_nm',
      'course_desc',
      'training_start',
      'training_end',
      "award_type",
      "price",
      "course_img",
      "training_type",
      "format",
      "modality",
      "amt_enrolled",
      "capacity",
      "views"
    ];

    public function institution(){
        return $this->belongsTo(Institution::class,"institution_id","institution_id");
    }

    public function course_application(){
        return $this->hasMany(Course_Application::class,"course_id","course_id");
    }
}
