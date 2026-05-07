<!doctype html>
<html lang="en">
<head>
  @include('admin.layouts.meta')

  {{-- Fonts --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous"/>
  {{-- OverlayScrollbars --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous"/>
  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous"/>
  {{-- AdminLTE --}}
  <link rel="stylesheet" href="{{ url('themeadmin/css/adminlte.min.css') }}"/>
  {{-- ApexCharts --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" crossorigin="anonymous"/>
  {{-- jsVectorMap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" crossorigin="anonymous"/>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">

  {{-- Header --}}
  @include('admin.layouts.header')

  {{-- Sidebar --}}
  @include('admin.layouts.sidebar')

  {{-- Main Content --}}
  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        {{-- Small Boxes --}}
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-primary">
              <div class="inner"><h3>150</h3><p>New Orders</p></div>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-success">
              <div class="inner"><h3>53<sup class="fs-5">%</sup></h3><p>Bounce Rate</p></div>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-warning">
              <div class="inner"><h3>44</h3><p>User Registrations</p></div>
              <a href="#" class="small-box-footer link-dark link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-danger">
              <div class="inner"><h3>65</h3><p>Unique Visitors</p></div>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0">More info <i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div>

        {{-- Charts Row --}}
        <div class="row">
          <div class="col-lg-7 connectedSortable">
            <div class="card mb-4">
              <div class="card-header"><h3 class="card-title">Sales Value</h3></div>
              <div class="card-body"><div id="revenue-chart"></div></div>
            </div>
          </div>
          <div class="col-lg-5 connectedSortable">
            <div class="card text-white bg-primary bg-gradient border-primary mb-4">
              <div class="card-header border-0"><h3 class="card-title">Sales Value</h3></div>
              <div class="card-body"><div id="world-map" style="height:220px"></div></div>
              <div class="card-footer border-0">
                <div class="row">
                  <div class="col-4 text-center"><div id="sparkline-1"></div><div class="text-white">Visitors</div></div>
                  <div class="col-4 text-center"><div id="sparkline-2"></div><div class="text-white">Online</div></div>
                  <div class="col-4 text-center"><div id="sparkline-3"></div><div class="text-white">Sales</div></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  {{-- Footer --}}
  @include('admin.layouts.footer')

</div>

{{-- Scripts --}}
@include('admin.layouts.js')
</body>
</html>