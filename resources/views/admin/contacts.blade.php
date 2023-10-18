>@extends('adminlayouts.master')

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
                                <h5>Contact Messages</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   <?php $i = 0 ; ?>

                                        @foreach ($msgs as $msg )
                                         <tr>
                                         <?php $i++; ?>
                                           <td>{{ $i }}</td>
                                        <td>{{$msg->name}}</td>
                                      <td>{{$msg->email}}</td>
                                          <td>{{$msg->phone}}</td>
                                         <td>{{$msg->sybject}}</td>
                                         <td>{{$msg->msg}}</td>
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
<!-- Container-fluid Ends-->
 @endsection
