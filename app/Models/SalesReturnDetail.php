<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturnDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];
}
