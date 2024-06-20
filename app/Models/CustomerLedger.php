<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLedger extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function customer()
    {
        return $this->belongsTo(Contact::class, 'customer_id', 'id');
    }
    public function sale()
    {
        return $this->belongsTo(Sales::class, 'customer_id', 'customer_id');
    }
    public function collection()
    {
        return $this->belongsTo(CollectionInfo::class, 'customer_id', 'customer_id');
    }
}
