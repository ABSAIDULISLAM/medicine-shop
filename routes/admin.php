<?php

use App\Http\Controllers\admin\AccountController;
use App\Http\Controllers\admin\CollectionController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\HRManagementController;
use App\Http\Controllers\admin\SupliyerController;
use App\Http\Controllers\admin\MedicineController;
use App\Http\Controllers\admin\PurchaseController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\SalesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SupliyerPaymentController;
use App\Http\Controllers\backend\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin/')->as('Admin.')->group(function(){
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('stock-matching', [HomeController::class, 'StockMatching'])->name('stack.matching');
    Route::get('stock-matching/create', [HomeController::class, 'StockMatchingCreate'])->name('stock.matching.create');
});

Route::controller(CustomerController::class)->prefix('customer/')->as('Customer.')->group(function(){
    Route::get('list', 'index')->name('index');
});

Route::controller(SupliyerController::class)->prefix('supliyer/')->as('Supliyer.')->group(function(){
    Route::get('list', 'index')->name('index');
});

Route::controller(MedicineController::class)->prefix('medicine/')->as('Medicine.')->group(function(){
    Route::get('list', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit', 'edit')->name('edit');
});

Route::controller(PurchaseController::class)->prefix('purchase/')->as('Purchase.')->group(function(){
    Route::get('list', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit', 'edit')->name('edit');
    Route::get('windowPop/invoice', 'windowPopInvoice')->name('windowPop.invoice');
});

Route::controller(SalesController::class)->prefix('sales/')->as('Sales.')->group(function(){
    Route::get('list', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit', 'edit')->name('edit');

    Route::prefix('return/')->group(function(){
        Route::get('list', 'SalesReturnList')->name('return.list');
    });
});

Route::controller(CollectionController::class)->prefix('collection/')->as('Collection.')->group(function(){
    Route::get('list', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit', 'edit')->name('edit');
});

Route::controller(SupliyerPaymentController::class)->prefix('supliyer-payment/')->as('Supliyer-payment.')->group(function(){
    Route::get('list', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit', 'edit')->name('edit');
});

Route::controller(HRManagementController::class)->prefix('hr-management/')->as('HR.')->group(function(){
    Route::prefix('employee')->group(function(){
        Route::get('type', 'EmployeeType')->name('employee.type');

        Route::get('list', 'EmployeeList')->name('employee.list');
        Route::get('create', 'EmployeeCreate')->name('employee.create');
        Route::get('edit', 'EmployeeEdit')->name('employee.edit');

        Route::get('statement', 'EmployeeStatement')->name('employee.statement');
        Route::get('designation', 'EmployeeDesignation')->name('employee.designation');
        Route::get('salary', 'EmployeeSalary')->name('employee.salary');
    });
});
Route::controller(AccountController::class)->prefix('account/')->as('Account.')->group(function(){

    Route::prefix('expense/')->group(function(){
        Route::get('list', 'ExpenseList')->name('expense.list');
        Route::get('create', 'ExpenseCreate')->name('expense.create');
    });
    Route::prefix('income/')->group(function(){
        Route::get('list', 'IncomeList')->name('income.list');
        Route::get('create', 'IncomeCreate')->name('income.create');
        // Route::get('create', 'IncomeCreate')->name('income.create');
    });
    Route::prefix('bank/')->group(function(){
        Route::get('deposite', 'BankDeposite')->name('bank.deposite');
        Route::get('withdraw', 'BankWithdraw')->name('bank.withdraw');
        Route::get('transfer', 'BankTransfer')->name('bank.transfer');
        Route::get('create', 'Bankcreate')->name('bank.create');
    });


});


Route::controller(ReportController::class)->prefix('report/')->as('Report.')->group(function(){
    Route::prefix('employee')->group(function(){
        Route::get('cash-statement', 'CashStatement')->name('cash.statement');
        Route::get('expired-medicine-report', 'ExpiredMedicineReport')->name('expired.medicine.report');
        Route::get('stock-report', 'StockReport')->name('stock.report');
        Route::get('stockout', 'Stockout')->name('stockout');
        Route::get('sales-report', 'SalesReport')->name('sales.report');
        Route::get('purchase-report', 'PurchaseReport')->name('purchase.report');
        Route::get('sales-details', 'SalesDetails')->name('sales.details');
        Route::get('customer-report', 'CustomerReport')->name('customer.report');
        Route::get('supliyer-report', 'SupliyerReport')->name('supliyer.report');
        Route::get('customer-due', 'CustomerDue')->name('customer.due');
        Route::get('customer-statement', 'CustomerStatement')->name('customer.statement');

        Route::get('bank-leadger', 'BankLeadger')->name('bank.leadger');
        Route::get('collection-report', 'CollectionReport')->name('collection.report');
        Route::get('payment-report', 'PaymentReport')->name('payment.report');
        Route::get('employee-report', 'EmployeeReport')->name('employee.report');
        Route::get('employee-expense', 'EmployeeExpense')->name('employee.expense');
        Route::get('employee-ledger', 'EmployeeLedger')->name('employee.ledger');
        Route::get('monthly-salary-sheet', 'MonthlySalarySheet')->name('monthly.salary.sheet');
        Route::get('employee-statement', 'EmployeeStatement')->name('employee.statement');
        Route::get('customer-ledger', 'CustomerLedger')->name('customer.ledger');
        Route::get('supliyer-ledger', 'SupliyerLedger')->name('supliyer.ledger');
        Route::get('expense-head-report', 'ExpenseHeadReport')->name('expense.head.report');
        Route::get('single-head-report', 'SingleHeadReport')->name('single.head.report');
        Route::get('expense-report', 'ExpenseReport')->name('expense.report');
        Route::get('invoice-profit', 'InvoiceProfit')->name('invoice.profit');
        Route::get('profit-loss', 'ProfitLoss')->name('profit-loss');

    });

});

Route::controller(SettingsController::class)->prefix('settings/')->as('Settings.')->group(function(){

    Route::get('generic-list', 'GenericList')->name('generic.list');
    Route::get('company-list', 'CompanyList')->name('company.list');
    Route::get('medicine-form-list', 'MedicineFormList')->name('medicine.form.list');
    Route::get('rack-list', 'RackList')->name('rack.list');
    Route::get('journal-list', 'JournalList')->name('journal.list');
    Route::get('account-head', 'AccountHead')->name('account.head');
    Route::get('sub-head', 'SubHead')->name('sub.head');
    Route::get('bank-setup', 'BankSetup')->name('bank.setup');
    Route::get('company-setup', 'CompanySetup')->name('company.setup');
    Route::get('new-barcode', 'NewBarcode')->name('new.barcode');



});
