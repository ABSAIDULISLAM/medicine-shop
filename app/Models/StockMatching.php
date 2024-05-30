<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMatching extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function stockmetcingdetails()
    {
        return $this->hasMany(StockMatchingDetail::class, 'common_id', 'id');
    }
}
