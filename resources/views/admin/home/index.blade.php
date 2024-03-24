@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')

    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">

          <a href="sales-report.html">
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Daily Sales</span>
                <span class="info-box-number" id="daily_sales"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="sales-report.html">
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Sales</span>
                <span class="info-box-number" id="monthly_sales"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="collection-report.html">
            <div class="info-box bg-green">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Daily Collection</span>
                <span class="info-box-number" id="daily_collection"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>


          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">


          <a href="purchases-report.html">
            <div class="info-box bg-blue">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Daily Purchases</span>
                <span class="info-box-number" id="daily_purchases"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="purchases-report.html">
            <div class="info-box bg-blue">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Purchases</span>
                <span class="info-box-number" id="monthly_purchases"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="collection-report.html">
            <div class="info-box bg-blue">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Collection</span>
                <span class="info-box-number" id="monthly_collection"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">

          <a href="payment-report">
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Daily Payment</span>
                <span class="info-box-number" id="daily_payment"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="payment-report.html">
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Payment</span>
                <span class="info-box-number" id="monthly_payment"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="cash_shatement">
            <div class="info-box bg-red">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Cash Statement</span>
                <span class="info-box-number" id="cash_statement"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>

              </div>
            </div>
          </a>

          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">


          <a href="expense-report">
            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Daily Expense</span>
                <span class="info-box-number" id="daily_expense"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="expense-report">
            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Monthly Expense</span>
                <span class="info-box-number" id="monthly_expense"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <a href="bank-ledger">
            <div class="info-box bg-yellow">
              <span class="info-box-icon"><i class="ion ion-cash"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Bank Statement</span>
                <span class="info-box-number" id="bank_statement"></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-12">
          <div class="panel panel-warning">
            <div class="panel-heading"><span style="font-weight:bold; font-size: 16px">Top Sales Medicine current
                Month</span> </div>
            <div class="panel-body">

              <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered table-striped mb-0">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Medicine Name</th>
                      <th scope="col">Company Name</th>
                      <th scope="col">Total Sales Qty</th>
                      <th scope="col">Total Sales Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>

                        1
                      </td>
                      <td>
                        Napa extend </td>
                      <td>
                        Beximco Pharmaceuticals Ltd. </td>
                      <td>
                        5.00 </td>
                      <td>
                        10.00 </td>
                    </tr>

                  </tbody>
                </table>

              </div>

            </div>
          </div>
        </div>

      </div>

    </section>



@endsection