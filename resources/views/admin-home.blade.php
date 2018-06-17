@extends('layouts.admin-layout')

@section('header')
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-users "></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Users</span>
         <span class="info-box-number">###</span>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
        <span class="info-box-text">A</span>
        <span class="info-box-number">####</span>
        </div>
      </div>
    </div>
   
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">B</span>
        <span class="info-box-number">####</span>
       
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">A</span>
          <span class="info-box-number">####</span>
          </div>
        </div>
      </div>
  </div> 
@endsection

@section('content')
  <div class="col-md-4">
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">B</span>
      <span class="info-box-number">###</span>

        <div class="progress">
          <div class="progress-bar" style="width: 50%"></div>
        </div>
       
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <div class="info-box bg-green">
      <span class="info-box-icon"><i class="fa fa-building"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">C</span>
        <span class="info-box-number">###</span>
        <div class="progress">
          <div class="progress-bar" style="width: 20%"></div>
        </div>
       
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <div class="info-box bg-red">
      <span class="info-box-icon"><i class="fa fa-building"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">D</span>
        <span class="info-box-number">###</span>

        <div class="progress">
          <div class="progress-bar" style="width: 70%"></div>
        </div>
       
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
    <div class="info-box bg-aqua">
      <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">E</span>
      <span class="info-box-number">###</span>

        <div class="progress">
          <div class="progress-bar" style="width: 40%"></div>
        </div>
        
      </div>
      <!-- /.info-box-content -->
    </div>
  </div>
@endsection