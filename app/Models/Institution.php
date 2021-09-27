<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Institution
 *
 * @property int $institution_id
 * @property string $institution_nm
 * @property string $address
 * @property string $telephone_nbr
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Institution newModelQuery()
 * @method static Builder|Institution newQuery()
 * @method static Builder|Institution query()
 * @method static Builder|Institution whereAddress($value)
 * @method static Builder|Institution whereCreatedAt($value)
 * @method static Builder|Institution whereInstitutionId($value)
 * @method static Builder|Institution whereInstitutionNm($value)
 * @method static Builder|Institution whereTelephoneNbr($value)
 * @method static Builder|Institution whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Institution extends Model
{
    use HasFactory;

    public $primaryKey = "institution_id";
    public $table = "institutions";

    protected $fillable = [
      'institution_nm',
      "address",
      "telephone_nbr"
    ];

    public function course(){
        return $this->hasMany(Course::class,"institution_id","institution_id");
    }




}
