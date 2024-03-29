<style>
    .activeLink {
        background-color: #2E3D50;
        font-weight: bold;
        color: rgba(255, 0, 255, 0.877) !important;
    }
</style>
<aside class="main-sidebar" style="background-color:#008548">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="active" style="margin-top:5px;">
                <a href="{{ route('Admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview {{ Request::is('customer*', 'supliyer*') ? 'active menu-open' : '' }}"
                style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Customer.index') }}"
                            class=" {{ Request::is('customer/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Customer List</a></li>
                    <li><a href="{{ route('Supliyer.index') }}"
                            class=" {{ Request::is('supliyer/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Supplier List</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('medicine*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-medkit"></i> <span>Medicine</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Medicine.create') }}"
                            class="{{ Request::is('medicine/create') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Add Medicine</a></li>
                    <li><a href="{{ route('Medicine.index') }}"
                            class="{{ Request::is('medicine/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Medicine List</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('purchase*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-medkit"></i> <span>Purchases</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Purchase.create') }}"
                            class="{{ Request::is('purchase/create') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Add Purchases</a></li>
                    <li><a href="{{ route('Purchase.index') }}"
                            class="{{ Request::is('purchase/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Purchases List</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('sales*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-medkit"></i> <span>Sales</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Sales.create') }}"
                            class="{{ Request::is('sales/create') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Add Sale</a></li>
                    <li><a href="{{ route('Sales.index') }}"
                            class="{{ Request::is('sales/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i>
                            Sales List</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('collection*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-medkit"></i> <span>Collection</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Collection.create') }}"
                            class="{{ Request::is('collection/create') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Add Collection</a></li>
                    <li><a href="{{ route('Collection.index') }}"
                            class="{{ Request::is('collection/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Collection List</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('supliyer-payment*') ? 'active menu-open' : '' }}"
                style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-medkit"></i> <span>Supplier Payment</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Supliyer-payment.create') }}"
                            class="{{ Request::is('supliyer-payment/create') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Add Payment</a></li>
                    <li><a href="{{ route('Supliyer-payment.index') }}"
                            class="{{ Request::is('supliyer-payment/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Payment List</a></li>
                </ul>
            </li>

            <li><a href="{{ route('Sales.return.list') }}"
                    class="{{ Request::is('sales/return/list') ? 'activeLink' : '' }}"><i
                        class="fa fa-shopping-cart"></i> Sales Return</a></li>
            <li><a href="{{ route('Stock-matching.index') }}"
                    class="{{ Request::is('stock-matching/index') ? 'activeLink' : '' }}"><i
                        class="fa fa-shopping-cart"></i> Stock Matching</a></li>
            <li class="treeview {{ Request::is('hr*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-users"></i> <span>HR Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('HR.employee.type.list') }}"
                            class="{{ Request::is('hr/employee/type/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Employee Type</a></li>
                    <li><a href="{{ route('HR.employee.list') }}"
                            class="{{ Request::is('hr/employee/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Employee List</a></li>
                    <li><a href="{{ route('HR.employee.designation.list') }}"
                            class="{{ Request::is('hr/employee/designation/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Designation</a></li>
                    <li><a href="{{ route('HR.employee.salary.list') }}"
                            class="{{ Request::is('hr/employee/salary/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Monthly Salary</a></li>

                </ul>
            </li>
            <li class="treeview {{ Request::is('account*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Account</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('Account.expense.list') }}"
                            class="{{ Request::is('account/expense/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Expense List</a></li>
                    <li><a href="{{ route('Account.other-income.list') }}"
                            class="{{ Request::is('account/income/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Others Income</a></li>
                    <li><a href="{{ route('Account.bank.deposit.list') }}"
                            class="{{ Request::is('account/bank/deposit/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-bank"></i> Bank Deposit</a></li>

                    <li><a href="{{ route('Account.bank.withdraw.list') }}"
                            class="{{ Request::is('account/bank/withdraw/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-bank"></i> Bank Withdraw</a></li>
                    <li><a href="{{ route('Account.bank.transfer.list') }}"
                            class="{{ Request::is('account/bank/transfer/list') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Bank Transfer</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('report*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Report</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- for employee controller  --}}
                    <li><a href="{{ route('Report.employee.report') }}"
                            class="{{ Request::is('report/employee/report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Employee Report</a></li>
                    <li><a href="{{ route('Report.employee.expense') }}"
                            class="{{ Request::is('report/employee/expense') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Employee Expense</a></li>
                    <li><a href="{{ route('Report.employee.ledger') }}"
                            class="{{ Request::is('report/employee/ledger') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Employee Ledger</a></li>
                    <li><a href="{{ route('Report.employee.monthly.salary.sheet') }}"
                            class="{{ Request::is('report/employee/monthly-salary-sheet') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Employee Salary Sheet</a></li>

                    <li><a href="{{ route('Report.customer.report') }}"
                            class="{{ Request::is('report/employee/customer-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Customer Report</a></li>
                    <li><a href="{{ route('Report.customer.due') }}"
                            class="{{ Request::is('report/employee/customer-due') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Customer Due Report</a></li>
                    <li><a href="{{ route('Report.customer.ledger') }}"
                            class="{{ Request::is('report/employee/customer-ledger') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Customer Ledger</a></li>


                    <li><a href="{{ route('Report.cash.statement') }}"
                            class="{{ Request::is('report/employee/cash-statement') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Cash Statement Report</a></li>
                    <li><a href="{{ route('Report.expired.medicine.report') }}"
                            class="{{ Request::is('report/employee/expired-medicine-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Expire Medicine Report</a></li>
                    <li><a href="{{ route('Report.stock.report') }}"
                            class="{{ Request::is('report/employee/stock-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Stock Report</a></li>
                    <li><a href="{{ route('Report.stockout') }}"
                            class="{{ Request::is('report/employee/stockout') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Out Of Stock Report</a></li>
                    <li><a href="{{ route('Report.sales.report') }}"
                            class="{{ Request::is('report/employee/sales-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Sales Report</a></li>
                    <li><a href="{{ route('Report.purchase.report') }}"
                            class="{{ Request::is('report/employee/purchase-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Purchases Report</a></li>
                    <li><a href="{{ route('Report.sales.details') }}"
                            class="{{ Request::is('report/employee/sales-details') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Sales Details</a></li>

                    <li><a href="{{ route('Report.supliyer.report') }}"
                            class="{{ Request::is('report/employee/supliyer-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Supplier Report</a></li>


                    <li><a href="{{ route('Report.bank.leadger') }}"
                            class="{{ Request::is('report/employee/bank-leadger') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Bank Statement</a></li>
                    <li><a href="{{ route('Report.collection.report') }}"
                            class="{{ Request::is('report/employee/collection-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Collection Report</a></li>
                    <li><a href="{{ route('Report.payment.report') }}"
                            class="{{ Request::is('report/employee/payment-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Payment Report</a></li>

                    <li><a href="{{ route('Report.supliyer.ledger') }}"
                            class="{{ Request::is('report/employee/supliyer-ledger') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Supplier Ledger</a></li>
                    <li><a href="{{ route('Report.expense.head.report') }}"
                            class="{{ Request::is('report/employee/expense-head-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Expense Head Report</a></li>
                    <li><a href="{{ route('Report.single.head.report') }}"
                            class="{{ Request::is('report/employee/single-head-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Head Wise Report</a></li>
                    <li><a href="{{ route('Report.expense.report') }}"
                            class="{{ Request::is('report/employee/expense-report') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i>Expense Details Report</a></li>
                    <li><a href="{{ route('Report.invoice.profit') }}"
                            class="{{ Request::is('report/employee/invoice-profit') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i> Invoice Wise Profit</a></li>
                    <li><a href="{{ route('Report.profit-loss') }}"
                            class="{{ Request::is('report/employee/profit-loss') ? 'activeLink' : '' }}"><i
                                class="fa fa-money"></i>Net Profit & Loss</a></li>
                </ul>
            </li>
            <li class="treeview {{ Request::is('settings*') ? 'active menu-open' : '' }}" style="margin-top:3px">
                <a href="#">
                    <i class="fa fa-user-md"></i> <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{ route('Settings.generic.list') }}"
                            class="{{ Request::is('settings/generic-list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Generic List</a></li>

                    <li><a href="{{ route('Settings.company.list') }}"
                            class="{{ Request::is('settings/company-list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Company List</a></li>
                    <li><a href="{{ route('Settings.medicine.form.list') }}"
                            class="{{ Request::is('settings/medicine-form-list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Medicine Form</a></li>
                    <li><a href="{{ route('Settings.rack.list') }}"
                            class="{{ Request::is('settings/rack-list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Rack List</a></li>
                    <li><a href="{{ route('Settings.journal.list') }}"
                            class="{{ Request::is('settings/journal-list') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Journal List</a></li>
                    <li><a href="{{ route('Settings.account.head') }}"
                            class="{{ Request::is('settings/account-head') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Account Head</a></li>
                    <li><a href="{{ route('Settings.sub.head') }}"
                            class="{{ Request::is('settings/sub-head') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Sub Head</a></li>
                    <li><a href="{{ route('Settings.bank.setup') }}"
                            class="{{ Request::is('settings/bank-setup') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Bank Setup</a></li>
                    <li><a href="{{ route('Settings.company.setup') }}"
                            class="{{ Request::is('settings/company-setup') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Company Setup</a></li>
                    <!--<li><a href="/upload-medicine-stock"><i class="fa fa-user-circle"></i> Stock Upload</a></li>-->
                    <li><a href="database-bacup.html"><i class="fa fa-user-circle" class=""></i> Database
                            Bacup</a></li>
                    <li><a href="{{ route('Settings.new.barcode') }}" target="_blank"
                            class="{{ Request::is('settings/new-barcode') ? 'activeLink' : '' }}"><i
                                class="fa fa-user-circle"></i> Barcode Generate</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
