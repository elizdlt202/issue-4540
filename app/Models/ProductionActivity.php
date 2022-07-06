<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ProductionActivity extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    //s
    protected $casts = [
        'updated_at'  =>  'datetime:Y-m-d H:i:s',
        'created_at'  =>  'datetime:Y-m-d H:i:s',
    ];

    public function relatable_activity(): MorphTo
    {
        return $this->morphTo();
    }
}
