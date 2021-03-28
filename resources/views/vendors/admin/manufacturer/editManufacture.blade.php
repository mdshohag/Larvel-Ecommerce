@extends('merchant.admin.master')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1> {{ trans('labels.Manufacturer') }} <small>{{ trans('labels.AddNewManufacturer') }}...</small> </h1>
<ol class="breadcrumb">
    <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
    <li><a href="{{ URL::to('admin/manufacturers/display')}}"><i class="fa fa-industry"></i> {{ trans('labels.Manufacturer') }}</a></li>
    <li class="active">{{ trans('labels.AddManufacturer') }}</li>
</ol>
</section>

<!-- Main content -->
<section class="content">
<!-- Info boxes -->

<!-- /.row -->

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ trans('labels.AddNewManufacturer') }} </h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <br>

                            @if (session('update'))
                                <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong> {{ session('update') }} </strong>
                                </div>
                            @endif


                            @if (count($errors) > 0)
                                @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {{$errors->first()}}
                                    </div>
                            @endif
                        @endif
                        <!-- /.box-header -->
                            <!-- form start -->
                            <div class="box-body">
                                {!! Form::open(array('route' =>'manufecturer.insert', 'method'=>'post', 'class' => 'form-horizontal form-validate ', 'enctype'=>'multipart/form-data')) !!}
                               
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Name') }}<span style="color:red;">*</span></label>
                                    <div class="col-sm-10 col-md-4">
                                        {{-- {!! Form::text('mar_manufacturer_name',  '', array('class'=>'form-control  field-validate', 'id'=>'mar_manufacturer_name') !!} --}}
                                        <input type="text" name="mar_manufacturer_name" id="mar_manufacturer_name" class="form-control  field-validate" value="{{$MarManufacture->mar_manufacturer_name}}" />
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.ManufacturerNameExample') }}</span>
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ManufacturerURL') }}</label>
                                    <div class="col-sm-10 col-md-4">
                                        {{-- {!! Form::text('mar_manufacturers_slug',  '', array('class'=>'form-control', 'id'=>'mar_manufacturers_slug'), value(old('mar_manufacturers_slug')))  !!} --}}
                                        <input type="text" name="mar_manufacturer_name" id="mar_manufacturer_name" class="form-control  field-validate" value="{{$MarManufacture->mar_manufacturer_name}}" />
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                          {{ trans('labels.ManufacturerURLText') }}</span>
                                    </div>
                                </div>

                                
                                <div class="form-group" id="imageIcone">
                                    <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Image') }}</label>
                                    <div class="col-sm-10 col-md-4">
                                        <!-- Modal -->
                                        <div id="imageselected">  
                                          {!! Form::file('mar_manufacturer_image', array('id'=>'newIcon','class'=>"btn btn-primary")) !!}
                                        </div>
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.ImageText') }}</span>

                                        <br>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-md-3 control-label" for="product_name_fr">Publication Status</label>
                                    <div class="col-sm-10 col-md-4">
                                        <div class="form-check form-check-inline">
                                            {!! Form::radio('publication_status',1, array('id'=>"inlineRadio1",'class' =>"form-check-input")) !!}
                                            
                                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::radio('publication_status',0, array('id'=>"inlineRadio1",'class' =>"form-input")) !!}
                                            <label class="form-check-label" for="inlineRadio2">Unpublish</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary">{{ trans('labels.submit') }}</button>
                                </div>
                                    
                                <!-- /.box-footer -->
                                {!! Form::close() !!}
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


<!-- Main row -->

<!-- /.row -->
</section>
<!-- /.content -->
</div>
@endsection
