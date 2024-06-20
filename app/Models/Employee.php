<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $attributes = [
        'deletion_status' => 0,
    ];

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'designation_id', 'id');
    }
    public function employeetype()
    {
        return $this->belongsTo(EmployeeType::class, 'employee_type', 'id');
    }
    public function employeesalary()
    {
        return $this->hasMany(EmployeeSalary::class, 'employee_id', 'id');
    }
    public function employeeledger()
    {
        return $this->hasMany(EmployeeLedger::class, 'employee_id', 'id');
    }
}
