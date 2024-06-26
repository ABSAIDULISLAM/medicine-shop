<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->prefix('admin/')->group(function(){
    // Route::get('test', [App\Http\Controllers\backend\HomeController::class, 'test'])->name('test');
    Route::get('dashboard', [App\Http\Controllers\backend\HomeController::class, 'index'])->name('Admin.dashboard');

    Route::controller(App\Http\Controllers\Admin\CustomerController::class)
    ->prefix('customer/')->as('Customer.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\Admin\SupliyerController::class)
    ->prefix('suplyer/')->as('Supliyer.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(App\Http\Controllers\Admin\SupliyerPaymentController::class)
        ->prefix('supliyer-payment/')->as('Supliyer-payment.')
        ->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('money-recipt/{id}', 'MoneyRecipt')->name('money.recipt');
        Route::get('create', 'create')->name('create');
        Route::post('supplier/infos', 'SupplierInfo')->name('supplier.info');
        Route::post('store', 'store')->name('store');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(App\Http\Controllers\Admin\MedicineController::class)
    ->prefix('medicine/')->as('Medicine.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('windowPop/invoice/{id}', 'windowPopInvoice')->name('windowPop.invoice');

        Route::post('addMedicineType', 'addMedicineType')->name('addMedicineType');
        Route::get('search', 'search')->name('search');
    });

    Route::controller(App\Http\Controllers\Admin\PurchaseController::class)
    ->prefix('purchase/')->as('Purchase.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('windowPop/invoice/{invno}', 'windowPopInvoice')->name('windowPop.invoice');
        Route::post('supplier/store', 'SupplierStore')->name('supplier.store');
        Route::post('supplier-info', 'SupplierInfo')->name('supplier.info');
        Route::post('company_id', 'companySearch')->name('company.search');
        Route::post('medicine/store', 'medicineStore')->name('medicine.store');
        Route::post('product/search', 'searchProduct')->name('product.search');
        Route::post('single/product/search', 'fetchSingleProduct')->name('fetch.single.product');
    });

    Route::controller(App\Http\Controllers\Admin\SalesController::class)
    ->prefix('sales/')->as('Sales.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('/sales-data', 'getSalesData')->name('data');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('invoice/print/{id}', 'invoicePrint')->name('invoice.print');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('return/form/{id}', 'salesReturnForm')->name('return.form');
        Route::post('return/update', 'ReturnUpdate')->name('return.update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('windowPop/invoice/{invno}', 'windowPopInvoice')->name('windowPop.invoice');
        Route::post('customer/store', 'CustomerStore')->name('customer.store');
        Route::post('customer-info', 'CustomerInfo')->name('customer.info');
        Route::post('company_id', 'companySearch')->name('company.search');
        Route::post('medicine/store', 'medicineStore')->name('medicine.store');
        // Route::post('product/search', 'searchProduct')->name('product.search');
        Route::post('single/product/search', 'fetchSingleProduct')->name('fetch.single.product');

        Route::prefix('return/')->group(function(){
            Route::get('list', 'SalesReturnList')->name('return.list');
            Route::get('sales-return/delete/{id}', 'SalesReturndelete')->name('return.delete');
        });
    });

    Route::controller(App\Http\Controllers\Admin\CollectionController::class)
    ->prefix('collection/')->as('Collection.')->group(function(){
        Route::get('list', 'index')->name('index');
        Route::get('money-recipt/{id}', 'MoneyRecipt')->name('money.recipt');
        Route::post('customer/info', 'CustomerInfo')->name('customer.info');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    // Account Module
    Route::controller(App\Http\Controllers\Admin\Account\ExpenseController::class)
    ->prefix('account/expense/')->as('Account.expense.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('invoice/{invno}', 'invoice')->name('invoice');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::post('bank/balance', 'bankBalance')->name('bank.balance');
        Route::post('account-head/fetch', 'getAccountHead')->name('accounthead');
        Route::post('sub-head/fetch', 'getSubHead')->name('sub.head');
    });
    Route::controller(App\Http\Controllers\Admin\Account\OtherIncomeController::class)
    ->prefix('account/other-income/')->as('Account.other-income.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('invoice/{invno}', 'invoice')->name('invoice');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::post('bank/balance', 'bankBalance')->name('bank.balance');
    });
    Route::controller(App\Http\Controllers\Admin\Account\BankDepositController::class)
    ->prefix('account/bank/deposit')->as('Account.bank.deposit.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\Admin\Account\BankWithdrawalController::class)
    ->prefix('account/bank/withdraw')->as('Account.bank.withdraw.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\Admin\Account\BankTransferController::class)
    ->prefix('account/bank/transfer')->as('Account.bank.transfer.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::get('update', 'edit')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('balance/transfer', 'balance')->name('balance.transfer');
        Route::get('balance/savings', 'balancesavings')->name('balance.savings');
    });

    // HR-Module
    Route::controller(App\Http\Controllers\Admin\HR\EmployeeTypeController::class)
    ->prefix('hr/employee/type/')->as('HR.employee.type.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\Admin\HR\EmployeeController::class)
    ->prefix('hr/employee/')->as('HR.employee.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('statement', 'statement')->name('statement');
    });
    Route::controller(App\Http\Controllers\Admin\HR\DesignationController::class)
    ->prefix('hr/employee/designation/')->as('HR.employee.designation.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\Admin\HR\EmployeeSalaryController::class)
    ->prefix('hr/employee/salary')->as('HR.employee.salary.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');

    });

    // Reports
    Route::controller(App\Http\Controllers\Admin\Report\EmployeeReportController::class)
    ->prefix('report/employee')->as('Report.employee.')->group(function(){
        // employee report
        Route::get('report', 'EmployeeReport')->name('report');
        // employee expense
        Route::get('expense', 'EmployeeExpense')->name('expense');
        Route::get('expense/filter', 'EmployeeExpenseFilter')->name('expense.filter');
        // employee ledger
        Route::get('ledger', 'EmployeeLedger')->name('ledger');
        Route::get('ledger/statement', 'EmployeeLedgerStatement')->name('ledger.statement');
        Route::get('monthly-salary-sheet', 'MonthlySalarySheet')->name('monthly.salary.sheet');
    });

    Route::controller(App\Http\Controllers\Admin\Report\CustomerReportController::class)
    ->prefix('report/customer')->as('Report.customer.')->group(function(){
        Route::get('report', 'report')->name('report');
        Route::get('due', 'due')->name('due');
        Route::get('statement', 'statement')->name('statement');
        Route::get('ledger', 'ledger')->name('ledger');
    });

    Route::controller(App\Http\Controllers\Admin\StockController::class)
    ->prefix('stock-matching/')->as('Stock-matching.')->group(function(){
        Route::get('index', 'index')->name('index');
        Route::get('invoice/view/{id}', 'invoiceView')->name('invoice.view');
        Route::get('create', 'create')->name('create');
        Route::post('single/product/search', 'fetchSingleProduct')->name('fetch.single.product');
        Route::post('store', 'store')->name('store');
        Route::get('delete/{id}', 'delete')->name('delete');
    });


    Route::controller(App\Http\Controllers\Admin\ReportController::class)
    ->prefix('report/')->as('Report.')->group(function(){

        Route::prefix('employee')->group(function(){
            Route::get('cash-statement', 'CashStatement')->name('cash.statement');
            Route::get('expired-medicine/list', 'ExpiredMedicineReport')->name('expired.medicine.report');
            Route::get('medicine-statement/ledger/{id}', 'MedicineLedger')->name('medicine.statment');
            Route::get('stock-report', 'StockReport')->name('stock.report');
            Route::get('stockout', 'Stockout')->name('stockout');
            Route::get('sales-report', 'SalesReport')->name('sales.report');
            Route::get('sales-details', 'SalesDetails')->name('sales.details');
            Route::get('purchase-report', 'PurchaseReport')->name('purchase.report');
            Route::get('supliyer-report', 'SupliyerReport')->name('supliyer.report');
            Route::get('supliyer-ledger', 'SupliyerLedger')->name('supliyer.ledger');
            Route::get('bank-leadger', 'BankLeadger')->name('bank.leadger');
            Route::get('bank/statement/{id}', 'BankStatement')->name('bank.statement');
            Route::get('collection-report', 'CollectionReport')->name('collection.report');
            Route::get('payment-report', 'PaymentReport')->name('payment.report');

            Route::get('expense-head-report', 'ExpenseHeadReport')->name('expense.head.report');
            Route::get('single-head-report', 'SingleHeadReport')->name('single.head.report');

            Route::get('expense-report', 'ExpenseReport')->name('expense.report');
            Route::get('expense/voucher/{id}', 'ExpenseDebitVowchar')->name('expense.debit.vouchar');
        });

        Route::get('invoice-profit', 'InvoiceProfit')->name('invoice.profit');
        Route::get('profit-loss', 'ProfitLoss')->name('profit-loss');
    });

    Route::controller(App\Http\Controllers\admin\Settings\GenericController::class)->prefix('settings/generic')->as('Settings.generic.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\CompanyController::class)
    ->prefix('settings/company')->as('Settings.company.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\MedicineFormController::class)->prefix('settings/medicine-form')->as('Settings.medicine-form.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\RackController::class)->prefix('settings/rack')->as('Settings.rack.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\JournalController::class)->prefix('settings/journal')->as('Settings.journal.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\AccountHeadController::class)->prefix('settings/account-head')->as('Settings.account-head.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(App\Http\Controllers\admin\Settings\SubHeadController::class)
    ->prefix('settings/sub-head')->as('Settings.sub-head.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    Route::controller(App\Http\Controllers\admin\Settings\BankSetupController::class)->prefix('settings/bank-setup')->as('Settings.bank-setup.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(App\Http\Controllers\admin\Settings\CompanySetupController::class)
    ->prefix('settings/company-setup')->as('Settings.company-setup.')->group(function(){
        Route::get('list', 'index')->name('list');
        Route::post('store', 'store')->name('store');
        Route::post('update', 'update')->name('update');
        Route::get('delete/{id}', 'delete')->name('delete');
    });

    // Route::controller(App\Http\Controllers\Admin\SettingsController::class)->prefix('settings/')->as('Settings.')->group(function(){

    //     Route::get('new-barcode', 'NewBarcode')->name('new.barcode');

    // });

    Route::get('barcode', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('Settings.new.barcode');
    Route::post('barcode/generate', [App\Http\Controllers\Admin\SettingsController::class, 'generate'])->name('barcode.generate');
    Route::get('barcode/image/{code}', [App\Http\Controllers\Admin\SettingsController::class, 'generateBarcode'])->name('barcode.image');


});
