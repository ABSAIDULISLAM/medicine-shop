<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankTransfer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function transfer()
    {
        return $this->belongsTo(BankSetup::class, 'transfer_bank_id','id');
    }
    public function savings()
    {
        return $this->belongsTo(BankSetup::class, 'saving_bank_id','id');
    }
}
