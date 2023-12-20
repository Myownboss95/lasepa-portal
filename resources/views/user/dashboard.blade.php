@extends('layouts.app')

@section('content')

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Welcome {{ auth()->user()->first_name}}!</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Welcome {{ auth()->user()->first_name}}!</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    {{-- card panel --}}
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Samples</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target={{ $user->samples?->count() }}>0</span>
                                            </h4>
                                            <div class="text-nowrap">
                                                <span class="badge bg-danger-subtle text-danger">{{ $user->samples?->whereNotNull('updated_at')->count() }} Samples</span>
                                                <span class="ms-1 text-muted font-size-13">Completed</span>
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
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Transactions</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target={{ $user->transactions?->count() }}>0</span>
                                            </h4>
                                            
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
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Transactions</span>
                                            <h4 class="mb-3">₦<span>{{ number_format($user->transactions?->sum('amount'), 2, '.', ',')}}</span>
                                            </h4>
                                        </div>
                                        <div class="flex-shrink-0 text-end dash-widget">
                                            <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->    
                    </div><!-- end row-->     


                    {{-- tables --}}
                     <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Samples</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0">

                                            <thead class="table-light">
                                                <tr>
                                                    <th>Sample</th>
                                                    <th>Amount Paid</th>
                                                    <th>Stage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($samples as $sample)
                                                @php
                                                @endphp
                                                    <tr>
                                                        <th scope="row">{{$sample->title}}</th>
                                                       
                                                           
                                                       <td>
                                                        @if ($sample->transaction->count() > 0)
                                                                {{ number_format(($sample->transaction->first()->amount), 2, '.', ',')}}
                                                        @endif
                                                       </td>
                                                       
                                                       <td>@if ($sample->stage->name == "Collected" )
                                                        {{$sample->stage->name}}
                                                        
                                                           
                                                       @endif
                                                       </td>
                                                       
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Your Transactions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">

                                            <thead>
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Sample</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <th scope="row">{{ '₦'.number_format($transaction->amount, 2, '.', ',') }}</th>
                                                    <td>{{ $transaction->sample->title }}</td> 
                                                    <td>{{ format_datetime($transaction->created_at)}}</td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->   
        </div>
    </div>
</div>
@endsection
