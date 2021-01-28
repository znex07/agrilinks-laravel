@extends('layouts.app')
@section('content')

    <div class="se-pre-con"></div>


  <!-- Page Content -->
  <div class="container" style="height: 750px">

    <div class="row">

      <div class="col-lg-3">

        <h4 class="my-4">Shop Equipment</h4>
        <div class="list-group">
            <a class="list-group-item" href="/home">Dashboard</a>
            <a class="list-group-item" href="/equipment_registration">Register Equipment</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox" style="max-height:250px;   ">
            <div class="carousel-item active">
              <img class="d-block img- w-900" src="{{ asset('img/item1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item w-900">
              <img class="d-block img-fluid" src="{{ asset('img/item2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item w-900">
              <img class="d-block img-fluid" src="{{ asset('img/item4.jpg') }}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

            @foreach ($product as $products)
            <div class="col-lg-4 col-md-6 mb-4">

                  <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="{{asset('images/'.$products->prod_img)}}" alt=""></a>
                      <div class="card-body">
                          <h4 class="card-title">
                              <a href="#">{{$products->prod_name}}</a>
                            </h4>
                            <h5>PHP{{$products->price}}</h5>
                            <p class="card-text">{{$products->prod_description}}</p>
                        </div>
                        <div class="card-footer" style="background-color: rgb(63, 63, 72)">
                            <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <input type="button" value="More Info" class="btn btn-success btn-sm" name="{{$products->id}}">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  @endsection
