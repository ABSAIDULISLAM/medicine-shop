<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasesDetail extends Model
{
    public function rack()
    {
        return $this->belongsTo(Rack::class, 'rack_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Medicine::class, 'product_id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Contact::class, 'supplier_id', 'id');
    }



    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];
}
