<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function generic()
    {
        return $this->belongsTo(Generic::class)->withDefault();
    }
    public function company()
    {
        return $this->belongsTo(Company::class)->withDefault();
    }
    public function mediform()
    {
        return $this->belongsTo(MedicineForm::class, 'medicine_form', 'id');
    }
    public function rack()
    {
        return $this->belongsTo(Rack::class)->withDefault();
    }

    public function ledger()
    {
        return $this->hasMany(StockLedger::class, 'medicine_id', 'id');//->withDefault()
    }


}
