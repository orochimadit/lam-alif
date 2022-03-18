@extends('layouts.index')

@section('contents')
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="slim-pagetitle">Dashboard Lam Alif App</h6>
        </div><!-- slim-pageheader -->

     
        <div class="card card-dash-one mg-t-20">
          <div class="row no-gutters">
            <div class="col-lg-3">
              <i class="icon ion-ios-analytics-outline"></i>
              <div class="dash-content">
                <label class="tx-primary">Impressions</label>
                <h2>822,490</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-pie-outline"></i>
              <div class="dash-content">
                <label class="tx-success">Page Visits</label>
                <h2>465,183</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-stopwatch-outline"></i>
              <div class="dash-content">
                <label class="tx-purple">Total Aset </label>
                <h2>2345</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <i class="icon ion-ios-contact"></i>
              <div class="dash-content">
                <label class="tx-danger">Users</label>
                <h2>520</h2>
              </div><!-- dash-content -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        

        <div class="container pd-t-30">

        <hr>

        <div class="report-summary-header">
          <div>
            <h4 class="tx-inverse mg-b-3">Overall Report Summary</h4>
            <p class="mg-b-0"><i class="icon ion-calendar mg-r-3"></i> January 01, 2022 - January 31, 2022</p>
          </div>
          <div>
            <a href="" class="btn btn-secondary"><i class="icon ion-ios-clock-outline tx-22"></i> Activity Logs</a>
            <a href="" class="btn btn-secondary"><i class="icon ion-ios-gear-outline tx-24"></i> Edit Settings</a>
          </div>
        </div><!-- d-flex -->

        <div class="row no-gutters dashboard-chart-one">
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>420</h1>
                <p>Total User</p>
              </div>
              <div>
                <div class="tx-24 mg-b-10 tx-center op-5">
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-600"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                  <i class="icon ion-man tx-gray-400"></i>
                </div>
                <label>Female (66%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-primary progress-bar-xs wd-65p" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Male (34%)</label>
                <div class="progress">
                  <div class="progress-bar bg-danger progress-bar-xs wd-35p" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>55</h1>
                <p>Total ASET</p>
              </div>
              <div>
                <div class="tx-16 mg-b-15 tx-center op-5">
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-600"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                  <i class="icon ion-cube tx-gray-400"></i>
                </div>
                <label>Digital products (85%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-success progress-bar-xs wd-85p" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>Non-digital products (15%)</label>
                <div class="progress">
                  <div class="progress-bar bg-warning progress-bar-xs wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md-4 col-lg">
            <div class="card card-total">
              <div>
                <h1>30</h1>
                <p>Total Cabang</p>
              </div>
              <div>
                <div class="tx-22 mg-b-10 tx-center op-5">
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-600"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                  <i class="icon ion-location tx-gray-400"></i>
                </div>
                <label>Local (75%)</label>
                <div class="progress mg-b-10">
                  <div class="progress-bar bg-purple progress-bar-xs wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->

                <label>International (25%)</label>
                <div class="progress">
                  <div class="progress-bar bg-pink progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><!-- progress -->
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-md col-lg-4">
            <div class="card card-revenue">
              <h6>Monthly Revenue</h6>
              <p>Calculated every 15th of the month</p>
              <h1>Rp.32,500 <span class="tx-success">1.4% up</span></h1>
              <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
              <label>Last month: <span>Rp.79,554</span></label>
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->

        <hr>

    
       

      </div><!-- container -->


@endsection