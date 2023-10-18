@extends('adminlayouts.master')
@section('adminContent')










       <!-- Page Body Start-->
    <div class="page-body-wrapper">
   
  @include('adminlayouts.sidebar')

  
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
                                                <form action="{{ route('Cats.store', 'test') }}" method="post">
                                                @csrf
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control" placeholder="name_ar" name='name_ar'>
                                                    </div>
                                                     <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name en</label>
                                                        <input class="form-control" placeholder="name_en" name='name_en'>
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
                                <h5>All Categories</h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   
                                    <?php $i = 0 ; ?>

                                        @foreach ($cats as $cat )
                                         <tr>
                                         <?php $i++; ?>
                                           <td>{{ $i }}</td>

                                        <td>{{$cat->name}}</td>
                                            
                                        <td>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg-{{$cat->id}}">Edit</button>
                                            <div class="modal fade bd-example-modal-lg-{{$cat->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Category</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('Cats.update', $cat->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Name</label>
                                                                        <input class="form-control" value="{{ $cat->getTranslation('name', 'ar') }}" name='name_ar'>
                                                                    </div>

                                                                      <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Name_en</label>
                                                                        <input class="form-control" value="{{ $cat->getTranslation('name', 'en') }}" name='name_en'>
                                                                    </div> 
                                                                    <div class="form-footer">
                                                                        <button class="btn btn-primary btn-block">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                    {{-- delte --}}
                     
                                                
                                             <a href="{{route('Cats.delete',$cat->id)}}" class="btn btn-danger" type="button" >Delete</a> 
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
