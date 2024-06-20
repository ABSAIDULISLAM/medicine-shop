<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierLedger extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function supplier()
    {
        return $this->belongsTo(Contact::class,'supplier_id','id');
    }
}
