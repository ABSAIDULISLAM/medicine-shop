<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeReportController extends Controller
{
    public function EmployeeReport()
    {
        return view('admin.report.employee.employee-report');
    }
    public function EmployeeExpense()
    {
        return view('admin.report.employee.expense');
    }
    public function EmployeeLedger()
    {
        return view('admin.report.employee.ledger');
    }
    public function MonthlySalarySheet()
    {
        return view('admin.report.employee.monthly-salary-sheet');
    }
    public function EmployeeStatement()
    {
        return view('admin.report.employee.statement');
    }
}
