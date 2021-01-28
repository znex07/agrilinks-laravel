@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container" id="h-page">
  <h1 id="hd1">Welcome to AgriLinks</h1>
  <p>Website for Filipino farmers, food distributors and consumer</p>
    <!-- login place -->
    <div class="login-div">
        <!-- Heading Row -->
        <div class="row align-items-center my-5">
          <div>
            @guest
            <div class="card">
            <div class="card-body" >
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
            {{-- <a class="btn btn-primary" href="/equipment_registration">Register Equipment now!</a> --}}
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
          </div>
          @endguest
        </div>
    </div>
</div>
    <!-- end of login -->
    <!-- /.row -->
    <div class="row mb-5">
        <div class="col">
                <div class="card h-100 border-warning">
                  <div class="card-body">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.da.gov.ph/wp-content/uploads/2021/01/Agri-chief-warns-traders-of-jacking-up-prices-of-pork-1536x1024.jpg" alt="">
                    <h5 class="card-title">Agri chief warns traders of jacking up prices of pork, other food items</h5>
                    <p class="card-text">Agriculture Secretary William Dar warns unscrupulous traders and wholesalers who unreasonably jack up prices of basic food items particularly pork, saying that a government task force is now monitoring their activities and if found guilty would face stiff penalties under the law.</p>
                  </div>
                  <div class="card-footer border-warning">
                    <a href="https://www.da.gov.ph/agri-chief-warns-traders-of-jacking-up-prices-of-pork-other-food-items/" target="blank" class="btn btn-primary btn-sm">Read More</a>
                  </div>
              </div>
        </div>
        <div class="col">
            <div class="card h-100 border-warning">
              <div class="card-body ">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.da.gov.ph/wp-content/uploads/2021/01/0-1536x1026.jpg" alt="">

                <h5 class="card-title">Turnover of Modernized Equipment from FIT Corea Trading Philippines, Inc (Jan. 20, 2021)</h5>
                <p class="card-text">Agriculture Secretary William Dar received modernized machines and equipment to ensure human, animal, and plant health from FIT Corea Trading Philippines, Inc., on January 20, 2021.

                    The machines, which were turned over by FIT Corea President Philip Kim, include a long-range spraying machine, a multi-crop lifter, and two units of Triple Disinfection System.</p>
              </div>
              <div class="card-footer border-warning">
                <a href="https://www.da.gov.ph/gallery/turnover-of-modernized-equipment-from-fit-corea-trading-philippines-inc-jan-20-2021/" target="black" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-warning">
              <div class="card-body ">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.da.gov.ph/wp-content/uploads/2021/01/0-1536x1026.jpg" alt="">

                <h5 class="card-title">Turnover of Modernized Equipment from FIT Corea Trading Philippines, Inc (Jan. 20, 2021)</h5>
                <p class="card-text">Agriculture Secretary William Dar received modernized machines and equipment to ensure human, animal, and plant health from FIT Corea Trading Philippines, Inc., on January 20, 2021.

                    The machines, which were turned over by FIT Corea President Philip Kim, include a long-range spraying machine, a multi-crop lifter, and two units of Triple Disinfection System.</p>
              </div>
              <div class="card-footer border-warning">
                <a href="https://www.da.gov.ph/gallery/turnover-of-modernized-equipment-from-fit-corea-trading-philippines-inc-jan-20-2021/" target="black" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border-warning">
              <div class="card-body ">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.da.gov.ph/wp-content/uploads/2021/01/0-1536x1026.jpg" alt="">

                <h5 class="card-title">Turnover of Modernized Equipment from FIT Corea Trading Philippines, Inc (Jan. 20, 2021)</h5>
                <p class="card-text">Agriculture Secretary William Dar received modernized machines and equipment to ensure human, animal, and plant health from FIT Corea Trading Philippines, Inc., on January 20, 2021.

                    The machines, which were turned over by FIT Corea President Philip Kim, include a long-range spraying machine, a multi-crop lifter, and two units of Triple Disinfection System.</p>
              </div>
              <div class="card-footer border-warning">
                <a href="https://www.da.gov.ph/gallery/turnover-of-modernized-equipment-from-fit-corea-trading-philippines-inc-jan-20-2021/" target="black" class="btn btn-primary btn-sm">Read More</a>
              </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col mb-5">
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
      <div class="col mb-5">
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
      <div class="col mb-5">
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
