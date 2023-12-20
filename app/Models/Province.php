<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
//P10 NO.15
class Province extends Model
{
    use HasFactory;
    protected $guarded = [];
//
    public function cities(): HasMany
{
    return $this->hasMany(City::class);

}
}
