 @extends('adminlayouts.master')
 
 @section('adminContent')
   <!-- Page Body Start-->
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


   @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                        <div style="text-align: right;" class="col-12 col-sm-6">
                            <div>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Create New</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create New </h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <form action="{{ route('Admins.store', 'test') }}" method="post">
                                                @csrf
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control" placeholder="name" name='name'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">email</label>
                                                        <input type="email" class="form-control" placeholder="email" name='email'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">password</label>
                                                        <input type="password" class="form-control" placeholder="password" name='password'>
                                                    </div>
                                                    <div class="form-footer">
                                                        <button class="btn btn-primary btn-block">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <h5>All Admins</h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   <?php $i = 0 ; ?>

                                        @foreach ($admins as $admin )
                                    <tr>
                                     <?php $i++; ?>
                                           <td>{{ $i }}</td>
                                      
                                      <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td>
                                            <button class="btn btn-primary"  type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg-{{$admin->id}}">Edit</button>
                                            <div class="modal fade bd-example-modal-lg-{{$admin->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Admin</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('Admins.update', $admin->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Name</label>
                                                                        <input class="form-control" value="{{$admin->name}}"  name='name'>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Email</label>
                                                                        <input type="email" class="form-control" value="{{$admin->email}}"  name='email'>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">password</label>
                                                                        <input type="password" class="form-control" value=""  name='password'>
                                                                    </div>
                                                                    <div class="form-footer">
                                                                        <button class="btn btn-primary btn-block">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                         <a href="{{route('Admin.delete',$admin->id)}}" class="btn btn-danger" type="button">Delete</a>
                                        </td>
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
 