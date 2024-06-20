<header class="main-header " style="background-color:#008548">
    <!-- Logo -->
    <a href="{{ route('Admin.dashboard') }}" class="logo" style="background-color:#008548">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>MC</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Pharmacy</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#008548">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                @php
                    $stockout = App\Models\Medicine::select('id', 'medicine_name', 'medicine_strength')
                        ->where('stock', '<', 0)
                        ->get();
                    $item = $stockout->count();
                @endphp
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-danger">{{ $item }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header" style="color: red">You have {{ $item }} Out of Stock Medicines</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu" style="overflow-x:auto;">
                                @forelse ($stockout as $item)
                                    <li>
                                        <a href="{{ route('Report.medicine.statment', ['id' => $item->id]) }}">{{ $item->medicine_name }}-{{ $item->medicine_strength }}
                                        </a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        <li class="footer"><a href="{{ route('Report.stockout') }}">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->

                @php
                    $expired = App\Models\Medicine::with('generic', 'company')
                        ->select('id', 'medicine_name', 'generic_id', 'company_id', 'medicine_strength')
                        ->where('expire_date', '<', now())
                        ->get();
                    $expiredItems = $expired->count();
                @endphp
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope  -o"></i>
                        <span class="label label-danger">{{ $expiredItems }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have <span
                                style="color: red;font-weight: bold">{{ $expiredItems }}</span> Upcoming expire
                            medicine.</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu" style="overflow-x:auto;">
                                @forelse ($expired as $item)
                                    <li>
                                        <a href="{{ route('Report.medicine.statment', ['id' => $item->id]) }}">{{ $item->medicine_name }}-{{ $item->medicine_strength }}-{{ $item->generic->generic_name }}-{{ $item->company->company_name }}
                                        </a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="expire-medi-report">View all tasks</a>
                        </li>
                    </ul>
                </li>
                @php
                    $company = App\Models\CompanySetup::where('id',auth()->user()->id)->first();
                @endphp
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img src="{{ asset($item->company_logo?: asset('backend/assets/logo.png')) }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{$company->company_name ?? 'Admin'}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                            <img src="{{ asset($item->company_logo?: asset('backend/assets/logo.png')) }}" class="img-circle" alt="User Image">
                            <p>
                                {{$company->company_name ?? 'Admin'}} <small>Member since {{$company->company_setup_date ?? 'Very First'}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{route('profile')}}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                                    class="btn btn-default btn-flat">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header><!-- Left side column. contains the logo and sidebar -->
