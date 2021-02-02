@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container" id="h-page" style="background: rgba(82, 65, 22, 0.35)">
    <!-- Heading Row -->
    <div class="row d-flex justify-content-center"  style="max-height:650px">
    <div class="col-8 ">
        <div id="carouselExampleIndicators" class="carousel slide my-2" data-interval="5000" data-ride="carousel" >
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner py-2 px-1" role="listbox"  style="height:400px; background: rgba(47, 85, 44, 0.35);">
            <div class="carousel-item active">
                {{-- @extends('layouts.login') --}}
              {{-- <img class="d-block +img- w-900" src="{{ asset('img/item1.jpg') }}" alt="First slide"> --}}
              @guest
              <!-- login place -->
              @if (Route::has('login'))

              <h1 id="hd1" class="text-warning">Welcome to AgriLinks</h1>
                <p class="text-center text-light">Website for Filipino farmers, food distributors and consumer</p>
              <div class="card rounded" id="login">
                  <div class="card-body bg-light text-dark">
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-center">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @endif
                @else
                <h2 class="text-warning py-5 d-flex justify-content-center">Welcome to AgriLinks, {{ Str::of(Auth::user()->name)->title() }} !</h2>
                <p class="text-center text-success">Website for Filipino farmers, food distributors and consumer</p>
                <div class="row">
                    <div class="col d-flex justify-content-center" >
                    <a class="btn btn-success btn-lg" href="/equipment_registration">Register Equipment now!</a>
                    </div>
                </div>
                @endguest


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
    </div>
    </div>

<!-- end of login -->
<!-- /.row -->
<div id="n-page p-5"  style="padding-top: 80px;">
    <div class="row mb-5">

        @foreach($posts as $post)
        <div class="col">
            <div class="card" style="width: 100%; height: 350px;">
                <img src="{{ Voyager::image( $post->image ) }}" style="width: 100%; height: 200px;">
                <div class="card-body">
                    <a href="/post/{{ $post->slug }}">
                        <span><h6>{!! Str::limit($post->title, 50) !!}</h6></span>
                    </a>

                    <p class="card-text font-weight-light" >{!! Str::limit($post->body,200) !!}</p>
                </div>
                <div class="card-footer">
                <button class="btn btn-info btn-block">Read more</button>
            </div>
            </div>
        </div>
        @endforeach

     </div>
    </div>

    <!-- Content Row -->
    <div id="m-page">
    <div class="row">
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Mission</h2>
            <p class="card-text">To provide our employees with a secure, safe, friendly and team-oriented environment in which all employees are valued.</p>
          </div>
          <div class="card-footer i-foot">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Vision</h2>
            <p class="card-text">To provide our growers with a stable home to deliver their goods with financial returns above the industry averages.</p>
          </div>
          <div class="card-footer i-foot">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">About</h2>
            <p class="card-text">We provide our customers with safe, high quality, processed goods at competitive pricing.</p>
          </div>
          <div class="card-footer i-foot">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
     </div>
    </div>

        <!-- Call to Action Well -->
    <div class="row">
    <div class="col-12 mb-5">
    <div class="card justify-text-center bg-success my-6 py-4 text-center ">
      <div class="card-body">
        <h4 class="text-white">We are committed to high ethical standards in the way we conduct our business. </h4>
      </div>
    </div>
    </div>
    </div>
    <!-- /.row -->
{{-- </div> --}}
@endsection
