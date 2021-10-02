<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Payment_info
 *
 * @property int $payment_info_id
 * @property int $student_id
 * @property string|null $card_nbr
 * @property string|null $card_holder_nm
 * @property string|null $billing_addr
 * @property int|null $cvv
 * @property string|null $exp_month
 * @property string|null $exp_year
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Payment_Activity[] $payment_activity
 * @property-read int|null $payment_activity_count
 * @property-read Student $student
 * @method static Builder|Payment_info newModelQuery()
 * @method static Builder|Payment_info newQuery()
 * @method static Builder|Payment_info query()
 * @method static Builder|Payment_info whereBillingAddr($value)
 * @method static Builder|Payment_info whereCardHolderNm($value)
 * @method static Builder|Payment_info whereCardNbr($value)
 * @method static Builder|Payment_info whereCreatedAt($value)
 * @method static Builder|Payment_info whereCvv($value)
 * @method static Builder|Payment_info whereExpMonth($value)
 * @method static Builder|Payment_info whereExpYear($value)
 * @method static Builder|Payment_info wherePaymentInfoId($value)
 * @method static Builder|Payment_info whereStudentId($value)
 * @method static Builder|Payment_info whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Payment_info extends Model
{
    use HasFactory;

    protected $primaryKey = "payment_info_id";
    protected $table = "payment_info";

    protected $fillable = [
        "student_id",
        "card_nbr",
        'cvv',
        "card_holder_nm",
        "billing_addr",
        "exp_month",
        "exp_year",

    ];

    public function student() {
       return  $this->belongsTo(Student::class,"student_id","student_id");
    }

    public function payment_activity(){
        return $this->hasMany(Payment_Activity::class,"payment_info_id","payment_info_id");
    }

}
