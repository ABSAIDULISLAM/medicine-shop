<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function purchase()
    {
        return $this->hasMany(Purchases::class, 'supplier_id', 'id');
    }

    public function cusledger()
    {
        return $this->hasMany(CustomerLedger::class,'customer_id', 'id');
    }
    public function cashstatement()
    {
        return $this->hasMany(CashStatement::class,'insert_id', 'id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function collection()
    {
        return $this->hasMany(CollectionInfo::class, 'customer_id', 'id');
    }

    public function customerledger()
    {
        return $this->hasMany(CustomerLedger::class, 'customer_id', 'id');
    }



}
