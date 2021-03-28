@extends('merchant.admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            <small>{{ trans('labels.title_dashboard') }} </small>
            </h1>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</li>
            </ol>
        </section>
       
        <!-- Main content -->
        <section class="content">
            
            <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>ghyuytuyt</h3>
        			        <p>{{ trans('labels.NewOrders') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ URL::to('admin/orders/display')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.NewOrders') }}">{{ trans('labels.NewOrders') }} <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-light-blue">
                    <div class="inner">
                      <h3>jhgjhgjghjhg</h3>
        			  <p>{{ trans('labels.Total Money') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ URL::to('admin/products/display')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllProducts') }}">{{ trans('labels.viewAllProducts') }} <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-teal">
                    <div class="inner">
                      <h3>hjhgjghjhg</h3>
        			  <p>{{ trans('labels.Total Money Earned') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ URL::to('admin/orders/display')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllOrders') }}">{{ trans('labels.viewAllOrders') }} <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">

                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3>dgdfghdfgh</h3>
                      <p>{{ trans('labels.outOfStock') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ URL::to('admin/outofstock')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.outOfStock') }}">{{ trans('labels.outOfStock') }} <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3>dfgdfgdfg</h3>

                      <p>{{ trans('labels.customerRegistrations') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ URL::to('admin/customers/display')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllCustomers') }}">{{ trans('labels.viewAllCustomers') }}  <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>gdfgdfgf</h3>

                      <p>{{ trans('labels.totalProducts') }}</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ URL::to('admin/products/display')}}" class="small-box-footer" data-toggle="tooltip" data-placement="bottom" title="{{ trans('labels.viewAllProducts') }}">{{ trans('labels.viewAllProducts') }} <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->

              </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <script src="{!! asset('admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>

    <script src="{!! asset('admin/dist/js/pages/dashboard2.js') !!}"></script>
@endsection

