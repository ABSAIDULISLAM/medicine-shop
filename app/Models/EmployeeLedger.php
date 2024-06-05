<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLedger extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function incomes()
    {
        return $this->hasMany(Income::class, 'employee_id', 'employee_id');
    }

    // Define a method to get the most recent income
    public function latestIncome()
    {
        return $this->incomes()->orderBy('id', 'desc')->first();
    }
}
