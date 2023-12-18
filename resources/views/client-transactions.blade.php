@extends('layout.app')
@section('content')
<div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-sm-flex align-items-center justify-content-between"
                >
                  <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">Welcome Tunde!</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Samples Overview</h4>
                    <p class="card-title-desc">
                      This is a data table of all your samples submitted.
                    </p>
                  </div>
                  <div class="card-body">
                    <table
                      id="datatable-buttons"
                      class="table table-bordered dt-responsive nowrap w-100"
                    >
                      <thead>
                        <tr>
                          <th>Name of Samples</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Amount Paid</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Water sewage</td>
                          <td>Processing</td>
                          <td>2024/12/14</td>
                          <td>21,000</td>
                        </tr>
                        <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                            
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                            
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                           
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                           
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                           
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                            
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                           
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                          
                          </tr>
                          <tr>
                            <td>Water sewage</td>
                            <td>Processing</td>
                            <td>2024/12/14</td>
                            <td>21,000</td>
                           
                          </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- end cardaa -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
@endsection