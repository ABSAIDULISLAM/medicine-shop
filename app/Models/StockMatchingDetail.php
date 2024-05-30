<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMatchingDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id', 'id');
    }
}
