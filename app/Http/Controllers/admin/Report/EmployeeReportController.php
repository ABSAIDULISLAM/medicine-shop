<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeLedger;
use App\Models\EmployeeType;
use App\Models\Income;
use Carbon\Carbon;
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

    public function EmployeeLedgerStatement(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $employee_id = $request->input('employee_id', 0);

        $query = Employee::with(['employeeledger' => function($query) use ($from_date, $to_date) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }]);

        if ($employee_id != 0) {
            $query->where('id', $employee_id);
        }

        $employee = $query->orderBy('id', 'desc')->first();

        return view('admin.report.employee.statement', compact('employee', 'from_date', 'to_date', 'employee_id'));
    }


    // employee salary sheet table data
    public function MonthlySalarySheet(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $employee_id = $request->input('employee_id', 0);

        $query = Employee::with(['employeesalary' => function($query) use ($from_date, $to_date) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }]);

        if ($employee_id != 0) {
            $query->where('id', $employee_id);
        }

        $employees = $query->orderBy('id', 'desc')->get();

        // Calculate the total salary and balances for each employee
        $employees->each(function ($employee) {
            $employee->total_salary = $employee->employeesalary->sum('amount');
            $employee->previous_balance = $employee->deposit_amount;
            $employee->payment_amount = 0;
            $employee->current_balance = $employee->previous_balance + $employee->total_salary - $employee->payment_amount;
        });

        $empType = EmployeeType::all();

        return view('admin.report.employee.monthly-salary-sheet', compact('employees', 'empType', 'from_date', 'to_date', 'employee_id'));
    }


}
