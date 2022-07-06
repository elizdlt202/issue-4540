<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionOrder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'updated_at'  =>  'datetime:Y-m-d H:i:s',
        'created_at'  =>  'datetime:Y-m-d H:i:s',
    ];

    public function activities()
    {
        return $this->morphMany(ProductionActivity::class, 'relatable_activity');
    }
}
