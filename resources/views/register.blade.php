<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>TEST-APP</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png" type="image/png') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand"  href="dashboard.html">
                <img src="{{ asset('assets/img/tracking-icon-png-29.png') }}" style="height: 70px;"><br>
                TEST-APP
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">

                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                </ul>
                <hr class="d-lg-none" />
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
     
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Register TEST-APP</h1>
                        
                            
                        </div>

                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">
  
                        <div class="card-body px-lg-5 py-lg-5">
                       
                            <form role="form" method="POST" action="{{ route('register') }}" }}>
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row" style="display: none;">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="role" value="seller" required autocomplete="name" autofocus>
        
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                               <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                       {{--          <div class="form-group">
                                    <label class="control-label">Date of birth *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i>

                                            </span>
                                        </div>
                                        <input class="form-control" name="Dob" placeholder="Date of Birth" type="date"
                                            required>
                                    </div>
                                </div> --}}

                                
{{-- 
                                <div class="form-group">
                                    <label class="control-label">First shot Date *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i>

                                            </span>
                                        </div>
                                        <input class="form-control" name="Fsd" placeholder="Date of Birth" type="date"
                                            required>
                                    </div>
                                </div> --}}
                              {{--   <div class="form-group">
                                    <label class="control-label">Second shot Date *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i>

                                            </span>
                                        </div>
                                        <input class="form-control" name="Ssd" placeholder="Date of Birth" type="date"
                                            required>
                                    </div>
                                </div> --}}

                               {{--  <div class="form-group">
                                    <label class="control-label">Age *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" name="Age" placeholder="Age" type="number" required>
                                    </div>
                                </div> --}}
                               {{--  <div class="form-group">
                                    <label class="control-label">Sex *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <select class="form-control" name="sex" required>
                                            <option value="">--Sex--</option>
                                            <option value="male">M</option>
                                            <option value="femele">F</option>
                                        </select>
                                    </div>
                                </div> --}}




                            {{--     <div class="form-group">
                                    <label class="control-label">Choose type Vaccine *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                        </div>
                                        
                                        <select class="form-control" name="Vaccin" required>
                                            <option value="volvo">--Choose Vaccine--</option>
                                            <option value="Astrazeneca">Astrazeneca</option>
                                            <option value="Pfizer">Pfizer</option>
                                            <option value="Janssen">Janssen</option>
                                            
                                        </select>
                                    </div>
                                </div> --}}
                               {{--  <div class="form-group">
                                    <label class="control-label">Country*</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" name="Country" placeholder="Country" type="text"
                                            required>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label class="control-label">Shipping mode *</label>
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-delivery-fast"></i>
                                            </span>
                                        </div> --}}
                                        {{-- <input class="form-control" placeholder="Shipping Mode" type="text"> --}}
                                      {{--   <select class="form-control" name="shippingmode" required>
                                            <option value="volvo">--Choose Shipping Mode--</option>
                                            <option value="Overnight">Overnight 45$</option>
                                            <option value="normal">3-4 Days 25$</option>
                                          
                                        </select>
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3 ">
                                        <div class="input-group-prepend">
                                            <select name="cars" class="form-control ni ni-hat-3" id="cars">
                                                <option value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="opel">Opel</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div> --}}
                                {{-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> --}}
                               {{--  <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister"
                                                type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">I agree with the <a href="#!">Privacy
                                                        Policy</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Send</button>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        <a href="/" class="font-weight-bold ml-1" target="_blank">LOGIN</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    {{-- <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                class="nav-link" target="_blank">MIT License</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
