<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeLedger;
use App\Models\EmployeeType;
use App\Models\Income;
use Illuminate\Http\Request;

class EmployeeReportController extends Controller
{
    public function EmployeeReport()
    {
        $data = Employee::with('employeetype')->orderBy('id', 'desc')->get();

        return view('admin.report.employee.employee-report', compact('data'));
    }

    // employee expense list
    public function EmployeeExpense()
    {
        $employeeExpense = Income::where('account_type', 0)
            ->with([
                'accounthead' => function ($account) {
                    $account->select('id', 'head_name');
                },
                'subhead' => function ($account) {
                    $account->select('id', 'sub_head');
                },
                'employee' => function ($employee) {
                    $employee->select('id', 'employee_name');
                }
            ])
            ->select('id', 'money_receipt', 'amount', 'purpose', 'date', 'employee_id', 'account_head','sub_head_id')
            ->orderBy('id', 'desc')->get();

            $employee = Employee::orderBy('id','asc')->get();

        return view('admin.report.employee.expense', compact('employeeExpense','employee'));
    }
    // employee expense filter
    public function EmployeeExpenseFilter(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'employee_id' => 'nullable|integer',
        ]);
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $employeeId = $request->input('employee_id');

        $query = Income::whereBetween('date', [$fromDate, $toDate])
            ->where('account_type', 0)
            ->with([
                'accounthead:id,head_name',
                'subhead:id,sub_head',
                'employee:id,employee_name'
            ])
            ->select('id', 'money_receipt', 'amount', 'purpose', 'date', 'employee_id', 'account_head', 'sub_head_id');

        if ($employeeId && $employeeId != 0) {
            $query->where('employee_id', $employeeId);
        }

        $expense = $query->get();

        $employee = Employee::select('id', 'employee_name')->get();

        return view('admin.report.employee.expense', compact('expense', 'employee', 'fromDate', 'toDate', 'employeeId'));
    }

    // employee ledger search form
    public function EmployeeLedger()
    {
        $employee = Employee::select('id', 'employee_name')->get();
        return view('admin.report.employee.ledger',compact('employee'));
    }
    // employee ledger statement search
    public function EmployeeLedgerStatement(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'employee_id' => 'required|integer',
        ]);
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $employeeId = $request->input('employee_id');

        $query = Income::whereBetween('date', [$fromDate, $toDate])
            ->where('account_type', 0) // 1 for expense
            ->with('empledger');

        if ($employeeId && $employeeId != 0) {
            $query->where('employee_id', $employeeId);
        }

        $expense = $query->first();

        return view('admin.report.employee.statement', compact('expense', 'fromDate', 'toDate','employeeId'));
    }
    // for employee statement filter
    public function EmployeeLedgerStatementFilter(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'employee_id' => 'required|integer',
        ]);
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $employeeId = $request->input('employee_id');
        $filterdata = true;
        $expense = Income::where('account_type', 0) // 0 for expense
            ->where('employee_id', $employeeId)
            ->with(['empledger' => function($query) use ($fromDate, $toDate) {
                $query->whereBetween('date', [$fromDate, $toDate]);
            }])
            ->first();

        return view('admin.report.employee.statement', compact('expense', 'fromDate', 'toDate', 'employeeId','filterdata'));
    }
    // employee salary sheet table data
    public function MonthlySalarySheet()
    {
        return $data = Employee::select('id','employee_name')
        // ->with('')
        ->orderBy('id','desc')->get();

        $empType = EmployeeType::orderBy('id','desc')->get();

        return view('admin.report.employee.monthly-salary-sheet',compact('data','empType'));
    }



    public function EmployeeStatement()
    {
        return view('admin.report.employee.statement');
    }
}
