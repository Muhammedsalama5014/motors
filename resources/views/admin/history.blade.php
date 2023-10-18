@extends('adminlayouts.master')
@section('adminContent')

    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
      @include('adminlayouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Dashboard</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="home-item" href="index.html"><i
                                        data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid default-dash">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Reservation History</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Link</th>
                                        <th scope="col">Start Date and Time</th>
                                        <th scope="col">End Date and Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                   <tbody>
                                        
                                    <?php $i = 0 ; ?>

                                        @foreach ($orders as $order )
                                         <tr>
                                         <?php $i++; ?>
                                           <td>{{ $i }}</td>
                                        <td>{{$order->name}}</td>
                                      @foreach ($order->cars as $car )
                                            <td>
                                            <a href="{{"cardetails/$car->id"}}" class="btn btn-secondary">Link</a>
                                        </td>
                                      @endforeach
                                        <td>{{$order->start_date}}</td>
                                        <td>{{$order->exp_date}}</td>
                                       
                                       

                                      @foreach ($order->cars as $car )
                                               <td>
                                            <div>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg{{$car->id}}">Reservation Details</button>
                                                <div class="modal fade bd-example-modal-lg{{$car->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Request Details</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col">Data</th>
                                                                        <th scope="col">Information</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Car Name</th>
                                                                            <td>{{$car->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Client</th>
                                                                            <td><a href="#">{{$order->user->name}}</a></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <th>Requested Days</th>
                                                                               <td>{{$order->number_days}}</td>
                                                                        </tr> <tr>
                                                                            <th>start date</th>
                                                                               <td>{{$order->start_date}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th> Price</th>
                                                                            <td>{{$order->price}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Total Price</th>
                                                                            <td>{{$order->total_price}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Request state</th>
                                                                             <td>{{$order->status}}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </td>
                                      @endforeach



                                    </tr>
                                    @endforeach
                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Container-fluid Ends-->
    
@endsection