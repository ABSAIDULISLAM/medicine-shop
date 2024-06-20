<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function accounthead()
    {
        return $this->belongsTo(AccountHead::class, 'account_head', 'id');
    }
}
