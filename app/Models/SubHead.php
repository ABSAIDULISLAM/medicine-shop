<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubHead extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'sub_heads';

    public function accounthead()
    {
        return $this->belongsTo(AccountHead::class, 'account_head', 'id');
    }
    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id', 'id');
    }



    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];
}
