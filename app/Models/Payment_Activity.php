<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Payment_Activity
 *
 * @property int $payment_activity_id
 * @property int $payment_info_id
 * @property string $amount_paid
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Payment_info $payment_activity
 * @method static Builder|Payment_Activity newModelQuery()
 * @method static Builder|Payment_Activity newQuery()
 * @method static Builder|Payment_Activity query()
 * @method static Builder|Payment_Activity whereAmountPaid($value)
 * @method static Builder|Payment_Activity whereCreatedAt($value)
 * @method static Builder|Payment_Activity wherePaymentActivityId($value)
 * @method static Builder|Payment_Activity wherePaymentInfoId($value)
 * @method static Builder|Payment_Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment_Activity extends Model
{
    use HasFactory;
    protected $primaryKey = "payment_activity";
    protected $table = "payment_activity";

    public function payment_activity(){
        return $this->belongsTo(Payment_info::class);
    }
}
