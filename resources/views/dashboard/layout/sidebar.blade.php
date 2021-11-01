<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>TEST-APP</title>
  <!-- Favicon -->
  <link rel="icon"  href="{{asset('favicon.ico')}}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0')}}" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
  @stack('css')
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
            <h1>TEST-APP</h1>
          {{-- <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item  {{ Route::currentRouteNamed('admin') ? 'active':'' }}">
              <a class="nav-link " href="{{route('admin')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item  {{ Route::currentRouteNamed('stock') ? 'active':'' }}">
              <a class="nav-link" href="{{route('stock')}}">
                <i class="ni ni-shop text-blue"></i>
                <span class="nav-link-text">Stock</span>
              </a>
            </li>
            {{-- <li class="nav-item   {{ Route::currentRouteNamed('commande') ? 'active':'' }}">
              <a class="nav-link " href="{{ route('commande') }}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Commands</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item {{ Route::currentRouteNamed('livraison') ? 'active':'' }}">
              <a class="nav-link" href="{{ route('livraison') }}">
                <i class="ni ni-square-pin text-orange"></i>
                <span class="nav-link-text">Livraison</span>
              </a>
            </li>  --}}          
            {{-- <li class="nav-item   {{ Route::currentRouteNamed('categorie') ? 'active':'' }} ">
              <a class="nav-link" href="{{ route('categorie') }}">
                <i class="ni ni-tag text-blue"></i>
                <span class="nav-link-text">Category</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item   {{ Route::currentRouteNamed('employé') ? 'active':'' }} ">
              @can('view', App\User::class)
              <a class="nav-link" href="{{ route('employé') }}">
                <i class="ni ni-circle-08 text-red"></i>
                <span class="nav-link-text">Users-Data</span>
              </a>
              @endcan
               @cannot('view', App\User::class)
          
               @endcannot
            </li> --}}
            {{-- <li class="nav-item  {{ Route::currentRouteNamed('statistic') ? 'active':'' }} ">
              <a class="nav-link" href="{{ route('statistic') }}">
                <i class="ni ni-chart-bar-32 text-red"></i>
                <span class="nav-link-text">Statistic</span>
              </a>
            </li> --}}
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            {{-- <span class="docs-normal">Documentation</span> --}}
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            {{-- <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link active active-pro" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">LOGOUT</span>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link active active-pro" href="{{ route('logout') }}">
                <i class="ni ni-user-run text-dark"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>  
    </div>
  </nav>