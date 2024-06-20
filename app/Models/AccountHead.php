<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountHead extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function subhead()
    {
        return $this->hasMany(SubHead::class, 'account_head', 'id');
    }

    public function journal()
    {
        return $this->hasMany(Journal::class, 'account_head', 'id');
    }
}
