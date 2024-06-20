<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];


    public function salesDetails()
    {
        return $this->hasMany(SalesDetail::class, 'common_id');
    }
    public function customer()
    {
        return $this->belongsTo(Contact::class, 'customer_id', 'id');
    }
    public function collection()
    {
        return $this->belongsTo(CashStatement::class, 'insert_id', 'id');
    }
}
