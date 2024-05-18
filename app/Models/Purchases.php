<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    public function suplyer()
    {
        return $this->belongsTo(Contact::class, 'supplier_id', 'id');
    }

    public function purchasedetails()
    {
        return $this->hasMany(PurchasesDetail::class, 'common_id', 'id');
    }



    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];
}
