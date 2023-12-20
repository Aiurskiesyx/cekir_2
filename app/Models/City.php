<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

//P10 NO.15
class City extends Model
{
    use HasFactory;
    protected $guarded = [];
//    
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

}