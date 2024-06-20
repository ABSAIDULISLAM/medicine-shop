<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];


    public function accounthead()
    {
        return $this->belongsTo(Journal::class, 'account_head', 'id');
    }
    public function subhead()
    {
        return $this->belongsTo(SubHead::class, 'sub_head_id', 'id');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function empledger()
    {
        return $this->hasMany(EmployeeLedger::class, 'employee_id', 'employee_id');
    }



    public function journal()
    {
        return $this->belongsTo(Journal::class, 'journal_id', 'id');
    }


}
