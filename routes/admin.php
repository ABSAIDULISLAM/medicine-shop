<?php

use App\Http\Controllers\Admin\Account\BankController;
use App\Http\Controllers\Admin\Account\BankDepositController;
use App\Http\Controllers\Admin\Account\BankTransferController;
use App\Http\Controllers\Admin\Account\BankWithdrawalController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\Account\ExpenseController;
use App\Http\Controllers\Admin\Account\OtherIncomeController;
use App\Http\Controllers\Admin\HR\DesignationController;
use App\Http\Controllers\Admin\HR\EmployeeController;
use App\Http\Controllers\Admin\HR\EmployeeTypeController;
use App\Http\Controllers\Admin\HRManagementController;
use App\Http\Controllers\Admin\SupliyerController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\Report\CustomerReportController;
use App\Http\Controllers\Admin\Report\EmployeeReportController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\admin\Settings\AccountHeadController;
use App\Http\Controllers\admin\Settings\BankSetupController;
use App\Http\Controllers\admin\Settings\CompanyController;
use App\Http\Controllers\admin\Settings\CompanySetupController;
use App\Http\Controllers\admin\Settings\GenericController;
use App\Http\Controllers\admin\Settings\JournalController;
use App\Http\Controllers\admin\Settings\MedicineFormController;
use App\Http\Controllers\admin\Settings\OwnCompanyController;
use App\Http\Controllers\admin\Settings\RackController;
use App\Http\Controllers\admin\Settings\SubHeadController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\SupliyerPaymentController;
use App\Http\Controllers\backend\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin/')->group(function(){

    Route::get('dashboard', [HomeController::class, 'index'])->name('Admin.dashboard');

    Route::controller(CustomerController::class)->prefix('customer/')->as('Customer.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(SupliyerController::class)->prefix('suplyer/')->as('Supliyer.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(SupliyerPaymentController::class)->prefix('supliyer-payment/')->as('Supliyer-payment.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::get('edit', 'edit')->name('edit');
    });

    Route::controller(MedicineController::class)->prefix('medicine/')->as('Medicine.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');

        Route::get('addMedicineType', 'addMedicineType')->name('addMedicineType');

    });

    Route::controller(PurchaseController::class)->prefix('purchase/')->as('Purchase.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('delete', 'delete')->name('delete');
        Route::get('windowPop/invoice', 'windowPopInvoice')->name('windowPop.invoice');
        Route::post('supplier/store', 'SupplierStore')->name('supplier.store');
        Route::post('supplier-info', 'SupplierInfo')->name('supplier.info');
        Route::post('company_id', 'companySearch')->name('company.search');
        Route::post('medicine/store', 'medicineStore')->name('medicine.store');
        Route::post('product/search', 'searchProduct')->name('product.search');
        Route::post('single/product/search', 'fetchSingleProduct')->name('fetch.single.product');
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


    // Account Module
    Route::controller(ExpenseController::class)->prefix('account/expense/')->as('Account.expense.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::post('bank/balance', 'bankBalance')->name('bank.balance');
    });
    Route::controller(OtherIncomeController::class)->prefix('account/other-income/')->as('Account.other-income.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(BankDepositController::class)->prefix('account/bank/deposit')->as('Account.bank.deposit.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(BankWithdrawalController::class)->prefix('account/bank/withdraw')->as('Account.bank.withdraw.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(BankTransferController::class)->prefix('account/bank/transfer')->as('Account.bank.transfer.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    // HR-Module
    Route::controller(EmployeeTypeController::class)->prefix('hr/employee/type/')->as('HR.employee.type.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(EmployeeController::class)->prefix('hr/employee/')->as('HR.employee.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('statement', 'statement')->name('statement');
    });
    Route::controller(DesignationController::class)->prefix('hr/employee/designation/')->as('HR.employee.designation.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('statement', 'statement')->name('statement');
    });
    Route::controller(DesignationController::class)->prefix('hr/employee/salary')->as('HR.employee.salary.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::get('edit', 'edit')->name('edit');

    });

    // Reports
    Route::controller(EmployeeReportController::class)->prefix('report/employee')->as('Report.employee.')->group(function(){
        Route::get('report', 'EmployeeReport')->name('report');
        Route::get('expense', 'EmployeeExpense')->name('expense');
        Route::get('ledger', 'EmployeeLedger')->name('ledger');
        Route::get('monthly-salary-sheet', 'MonthlySalarySheet')->name('monthly.salary.sheet');
        Route::get('employee-statement', 'EmployeeStatement')->name('statement');
    });
    Route::controller(CustomerReportController::class)->prefix('report/customer')->as('Report.customer.')->group(function(){
        Route::get('report', 'report')->name('report');
        Route::get('due', 'due')->name('due');
        Route::get('statement', 'statement')->name('statement');
        Route::get('ledger', 'ledger')->name('ledger');

    });
    Route::controller(StockController::class)->prefix('stock-matching/')->as('Stock-matching.')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
    });


    Route::controller(ReportController::class)->prefix('report/')->as('Report.')->group(function(){
        Route::prefix('employee')->group(function(){
            Route::get('cash-statement', 'CashStatement')->name('cash.statement');
            Route::get('expired-medicine-report', 'ExpiredMedicineReport')->name('expired.medicine.report');
            Route::get('stock-report', 'StockReport')->name('stock.report');
            Route::get('stockout', 'Stockout')->name('stockout');
            Route::get('sales-report', 'SalesReport')->name('sales.report');
            Route::get('sales-details', 'SalesDetails')->name('sales.details');
            Route::get('purchase-report', 'PurchaseReport')->name('purchase.report');
            Route::get('supliyer-report', 'SupliyerReport')->name('supliyer.report');
            Route::get('supliyer-ledger', 'SupliyerLedger')->name('supliyer.ledger');

            Route::get('bank-leadger', 'BankLeadger')->name('bank.leadger');
            Route::get('collection-report', 'CollectionReport')->name('collection.report');
            Route::get('payment-report', 'PaymentReport')->name('payment.report');


            Route::get('expense-head-report', 'ExpenseHeadReport')->name('expense.head.report');
            Route::get('single-head-report', 'SingleHeadReport')->name('single.head.report');
            Route::get('expense-report', 'ExpenseReport')->name('expense.report');
            Route::get('invoice-profit', 'InvoiceProfit')->name('invoice.profit');
            Route::get('profit-loss', 'ProfitLoss')->name('profit-loss');

        });
    });

    Route::controller(GenericController::class)->prefix('settings/generic')->as('Settings.generic.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(CompanyController::class)->prefix('settings/company')->as('Settings.company.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(MedicineFormController::class)->prefix('settings/medicine-form')->as('Settings.medicine-form.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(RackController::class)->prefix('settings/rack')->as('Settings.rack.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(JournalController::class)->prefix('settings/journal')->as('Settings.journal.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(AccountHeadController::class)->prefix('settings/account-head')->as('Settings.account-head.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(SubHeadController::class)->prefix('settings/sub-head')->as('Settings.sub-head.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(BankSetupController::class)->prefix('settings/bank-setup')->as('Settings.bank-setup.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(CompanySetupController::class)->prefix('settings/company-setup')->as('Settings.company-setup.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(SettingsController::class)->prefix('settings/')->as('Settings.')->group(function(){

        Route::get('new-barcode', 'NewBarcode')->name('new.barcode');

    });


});
