<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Student
 *
 * @property int $student_id
 * @property string $first_nm
 * @property string|null $middle_nm
 * @property string $last_nm
 * @property string|null $salutation_val
 * @property int $user_id
 * @property string $gender
 * @property string $dob
 * @property string|null $trn_nbr
 * @property string|null $tele_nbr
 * @property string|null $country_nm
 * @property string|null $addr_ln_1
 * @property string|null $city_nm
 * @property string|null $parish_nm
 * @property string|null $postal_zone
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Course_Application[] $course_application
 * @property-read int|null $course_application_count
 * @property-read Collection|Media[] $media
 * @property-read int|null $media_count
 * @property-read Collection|Payment_info[] $payment_info
 * @property-read int|null $payment_info_count
 * @property-read User $users
 * @method static Builder|Student newModelQuery()
 * @method static Builder|Student newQuery()
 * @method static Builder|Student query()
 * @method static Builder|Student whereAddrLn1($value)
 * @method static Builder|Student whereCityNm($value)
 * @method static Builder|Student whereCountryNm($value)
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereDob($value)
 * @method static Builder|Student whereFirstNm($value)
 * @method static Builder|Student whereGender($value)
 * @method static Builder|Student whereLastNm($value)
 * @method static Builder|Student whereMiddleNm($value)
 * @method static Builder|Student whereParishNm($value)
 * @method static Builder|Student wherePostalZone($value)
 * @method static Builder|Student whereSalutationVal($value)
 * @method static Builder|Student whereStudentId($value)
 * @method static Builder|Student whereTeleNbr($value)
 * @method static Builder|Student whereTrnNbr($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @method static Builder|Student whereUserId($value)
 * @mixin Eloquent
 */
class Student extends Model
{
    use HasFactory;

    protected $primaryKey = "student_id";
    protected $table = "students";

public function users(){
    return $this->belongsTo(User::class,"user_id","user_id");
}
public function user_activity() {
    return $this->hasMany(User_Activity::class,"student_id","student_id");
}
public function media(){
    return $this->hasMany(Media::class,"student_id","student_id");
}
public function course_application(){
    return $this->hasMany(Course_Application::class,"student_id","student_id");
}
public function payment_info(){
    return $this->hasMany(Payment_info::class,"student_id","student_id");
}
}
