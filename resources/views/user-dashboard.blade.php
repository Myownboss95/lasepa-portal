@extends('layout.app')
@section('content')
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Welcome Tunde!</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Samples</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="35">0</span>
                                                </h4>
                                                <div class="text-nowrap">
                                                    <span class="badge bg-success-subtle text-success">+8</span>
                                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                                </div>
                                            </div>
        
                                            <div class="flex-shrink-0 text-end dash-widget">
                                                <div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Submissions</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="45">0</span>
                                                </h4>
                                                <div class="text-nowrap">
                                                    <span class="badge bg-danger-subtle text-danger">-9 samples</span>
                                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 text-end dash-widget">
                                                <div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Average Submissions</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="0.78">0</span>
                                                </h4>
                                                <div class="text-nowrap">
                                                    <span class="badge bg-success-subtle text-success">+0.8</span>
                                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 text-end dash-widget">
                                                <div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Status of sample Delivery</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="18.34">0</span>%
                                                </h4>
                                                <div class="text-nowrap">
                                                    <span class="badge bg-success-subtle text-success">+5.32%</span>
                                                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 text-end dash-widget">
                                                <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div><!-- end row-->

                        <div class="row">
                            <div class="col-xl-8">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Sample Overview</h5>
                                            <div class="ms-auto">
                                                <div>
                                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                                        ALL
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        1M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        6M
                                                    </button>
                                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                                        1Y
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-8">
                                                <div>
                                                    <div id="market-overview" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="p-4">
                                                    <div class="mt-0">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                    1
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-14">Soil Sample</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill bg-success-subtle text-success  font-size-12 fw-medium">5.4%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                    2
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-14">Sewage water</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill bg-success-subtle text-success  font-size-12 fw-medium">+6.8%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm m-auto">
                                                                <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                                                    3
                                                                </span>
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <span class="font-size-14">Drinking water</span>
                                                            </div>
        
                                                            <div class="flex-shrink-0">
                                                                <span class="badge rounded-pill bg-danger-subtle text-danger  font-size-12 fw-medium">-4.9%</span>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="mt-4 pt-2">
                                                        <a href="client-samples.html" class="btn btn-primary w-100">See All Samples<i
                                                                class="mdi mdi-arrow-right ms-1"></i></a>
                                                    </div>
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row-->
        
                            <div class="col-xl-4">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Samples submitted by Locations</h5>
                                            <div class="ms-auto">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Branches<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                                        <a class="dropdown-item" href="#">Head Office</a>
                                                        <a class="dropdown-item" href="#">Alimosho</a>
                                                        <a class="dropdown-item" href="#">Agege</a>
                                                        <a class="dropdown-item" href="#">Badagry</a>
                                                        <a class="dropdown-item" href="#">Ikorodu</a>
                                                        <a class="dropdown-item" href="#">Orile-Iganmu</a>
                                                        <a class="dropdown-item" href="#">Lekki Zonal</a>
                                                        <a class="dropdown-item" href="#">Epe Zonal</a>
                                                        <a class="dropdown-item" href="#">Isolo Zonal</a>
                                                        <a class="dropdown-item" href="#">Amuwo Zonal</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="sales-by-locations" data-colors='["--bs-success"]' style="height: 253px"></div>

                                        <div class="px-2 py-2">
                                            <p class="mb-1">Head Office<span class="float-end">75%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                    style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Alimosho <span class="float-end">55%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                    style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-1">Agege <span class="float-end">85%</span></p>
                                            <div class="progress mt-2" style="height: 6px;">
                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                    style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-3">
                               
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            
                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Updated Samples</h4>
                                        <div class="flex-shrink-0">
                                            <div class="dropdown align-self-start">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Copy</a>
                                                    <a class="dropdown-item" href="#">Save</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- end card header -->

                                    <div class="card-body px-0 pt-2">
                                            <div class="table-responsive px-3" data-simplebar style="max-height: 395px;">
                                                <table class="table align-middle table-nowrap">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="avatar-md me-4">
                                                                    <img src="{{asset('lineone/assets/images/product/soil.jpg')}}" class="img-fluid" alt="">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-15"><a href="" class="text-dark">Soil Sample</a></h5>
                                                                    <span class="text-muted">2400.00</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <p class="mb-1"><a href="" class="text-dark">Collected</a></p>
                                                               
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="text-muted mt-1">5 Samples</span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="avatar-md me-4">
                                                                    <img src="{{asset('lineone/assets/images/product/sewer.jpg')}}" class="img-fluid" alt="">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-15"><a href="" class="text-dark">Sewage water sample</a></h5>
                                                                    <span class="text-muted">6500.00</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <p class="mb-1"><a href="" class="text-dark">Rejected</a></p>
                                                    
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="text-muted mt-1">6 Samples</span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="avatar-md me-4">
                                                                    <img src="{{asset('lineone/assets/images/product/water.jpg')}}" class="img-fluid" alt="">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-15"><a href="" class="text-dark">Drinking Water Sample</a></h5>
                                                                    <span class="text-muted">3250.00</span>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <p class="mb-1"><a href="" class="text-dark">Collected</a></p>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <span class="text-muted mt-1">4 Samples</span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                   

                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            
                        </div><!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
@endsection