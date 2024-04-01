<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    public function generic()
    {
        return $this->belongsTo(Generic::class)->withDefault();
    }
    public function company()
    {
        return $this->belongsTo(Company::class)->withDefault();
    }


    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];
}
