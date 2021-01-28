@extends('layouts.app')
@section('content')


  <!-- Page Content -->
  <div class="container">
<div class="row justify-content-center">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('img/img1.jpg') }}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h3 class="font-weight-light">Welcome to AgriLinks</h3>
        <p>Website for Filipino farmers, food distributors and consumer</p>
        <a class="btn btn-primary" href="/equipment_registration">Register Equipment now!</a>

      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->


    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Mission</h2>
                <p class="card-text">To provide our employees with a secure, safe, friendly and team-oriented environment in which all employees are valued.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm">More Info</a>
            </div>
        </div>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-4 mb-5">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Vision</h2>
                <p class="card-text">To provide our growers with a stable home to deliver their goods with financial returns above the industry averages.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary btn-sm">More Info</a>
            </div>
        </div>
    </div>
    <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
          <div class="card h-100">
              <div class="card-body">
                  <h2 class="card-title">About</h2>
                  <p class="card-text">We provide our customers with safe, high quality, processed goods at competitive pricing.</p>
                </div>
          <div class="card-footer">
              <a href="#" class="btn btn-primary btn-sm">More Info</a>
            </div>
        </div>
    </div>
    <!-- /.col-md-4 -->

    <div class="col-md-12 mb-5">
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">We are committed to high ethical standards in the way we conduct our business. </p>
      </div>
    </div>
    </div>
</div>
<!-- /.row -->
</div>
</div>
