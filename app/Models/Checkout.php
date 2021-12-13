<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    use HasFactory, softDeletes;
    protected $guarded = ['id', 'created_at','deleted_at', 'updated_at'];

    public function Camp() : BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
}
