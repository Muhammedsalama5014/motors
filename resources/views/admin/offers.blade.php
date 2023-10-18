@extends('adminlayouts.master')
@section('adminContent')

        <!-- Page Sidebar Ends-->
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
                            <h3>Dashboard 1 </h3>
                        </div>
                        <div style="text-align: right;" class="col-12 col-sm-6">
                            <div>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal1-lg">Create New</button>
                                <div class="modal fade bd-example-modal1-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create New </h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                  <form action="{{ route('Discounts.store', 'test') }}" method="post">
                                                @csrf
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name ar</label>
                                                        <input class="form-control" placeholder="name" name='name_ar'>
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name en</label>
                                                        <input class="form-control" placeholder="name" name='name_en'>
                                                    </div>

                                


                                                  <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer By Cat </label>
                                                        <select class="form-control"  name='cat_id'>
                                                            <option value="">Cat Name</option>
                                                            @foreach ($cats as $cat )
                                                            <option value="{{$cat->id}}"> {{$cat->name}} </option>
                                                                
                                                            @endforeach
                                                          
                                                        </select>
                                                    </div>

                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer By Brand</label>
                                                        <select class="form-control"  name='brand_id'>
                                                            <option value="">Brand Name</option>
                                                            @foreach ($brands as $brand )
                                                            <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                                                
                                                            @endforeach
                                                          
                                                        </select>
                                                    </div>


                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer By Model </label>
                                                        <select class="form-control"  name='model_id'>
                                                            <option value="">Model Name</option>
                                                            @foreach ($models as $model )
                                                            <option value="{{$model->id}}"> {{$model->name}} </option>
                                                                
                                                            @endforeach
                                                          
                                                        </select>
                                                    </div>


                                                    

                                                 <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer In</label>
                                                        <input class="form-control"  name='discount_number' type='number' placeholder="Offer Value">
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer Value</label>
                                                        <input class="form-control" placeholder="Offer Value"  name='discount_value'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer Type</label>
                                                        <select class="form-control" name='discount_type'>
                                                            <option value='precent'>Precent</option>
                                                            <option value='flat'>Flat</option>
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer From</label>
                                                        <input class="form-control" type="datetime-local"  name='discount_start'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer To</label>
                                                        <input class="form-control" type="datetime-local"  name='discount_end'>
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
                                <h5>Discount on Cats Brands Models</h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Offer Name</th>
                                        <th scope="col">Offer On</th>
                                        <th scope="col">Offer Value</th>
                                        <th scope="col">Offer In</th>
                                        <th scope="col">Offer From</th>
                                        <th scope="col">Offer To</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0 ; ?>

                                      
                                       
                                       
                                    @foreach ($big_discount as $discount)
                                          <?php $i++; ?>
                                        
                                    <tr>
                                  
                                           <td>{{ $i }}</td>
                                        <td>{{$discount->name}}</td>
                                        @if ($discount->cat )
                                         <td>{{$discount->cat->name}}</td>
                                      
                                     

                                        @elseif ($discount->brand)
                                         <td>{{$discount->brand->name}}</td>
                                      
                                     

                                          @elseif ($discount->model)
                                         <td>{{$discount->model->name}}</td>
                                      
                                        @endif
                                        
                                        
                                     
                                    @if ($discount->discount_type == 'precent')
                                        <td>{{$discount->discount_value}}%</td>
                                           @else
                                        <td>{{$discount->discount_value}}</td>

                                        @endif
                                        <td>{{$discount->discount_number}}</td>
                                        <td>{{$discount->discount_start}}</td>
                                        <td>{{$discount->discount_end}}</td> 
                                        <td>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg-x">Edit</button>
                                            <div class="modal fade bd-example-modal-lg-x" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Offer</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Name</label>
                                                                        <input class="form-control" placeholder="name">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer By</label>
                                                                        <select class="form-control">
                                                                            <option>Car Name</option>
                                                                            <option>Car Brand</option>
                                                                            <option>Car Category</option>
                                                                            <option>Car Model</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer In</label>
                                                                        <select class="form-control">
                                                                            <option>One</option>
                                                                            <option>Two</option>
                                                                            <option>Three</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer Value</label>
                                                                        <input class="form-control" placeholder="Offer Value">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer Type</label>
                                                                        <select class="form-control">
                                                                            <option>Precent</option>
                                                                            <option>Flat</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer From</label>
                                                                        <input class="form-control" type="datetime-local">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer To</label>
                                                                        <input class="form-control" type="datetime-local">
                                                                    </div>
                                                                    <div class="form-footer">
                                                                        <button class="btn btn-primary btn-block">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <button class="btn btn-danger" type="button">Delete</button>
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





            {{-- ///////////////////////////// --}}
 <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Dashboard</h3>
                        </div>
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
                                                <form action="{{ route('Discounts.store', 'test') }}" method="post">
                                                @csrf
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name ar</label>
                                                        <input class="form-control" placeholder="name" name='name_ar'>
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Name en</label>
                                                        <input class="form-control" placeholder="name" name='name_en'>
                                                    </div>

                                


                                                  <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer By car </label>
                                                        <select class="form-control"  name='car_id'>
                                                            <option value="">car Name</option>
                                                            @foreach ($cars as $car )
                                                            <option value="{{$car->id}}"> {{$car->name}} </option>
                                                                
                                                            @endforeach
                                                          
                                                        </select>
                                                    </div>

                                                  
                                                    

                                                 <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer In</label>
                                                        <input class="form-control"  name='discount_number' type='number' placeholder="Offer Value">
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer Value</label>
                                                        <input class="form-control" placeholder="Offer Value"  name='discount_value'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer Type</label>
                                                        <select class="form-control" name='discount_type'>
                                                            <option value='precent'>Precent</option>
                                                            <option value='flat'>Flat</option>
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer From</label>
                                                        <input class="form-control" type="datetime-local"  name='discount_start'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Offer To</label>
                                                        <input class="form-control" type="datetime-local"  name='discount_end'>
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
                                <h5>All Offers On Cars</h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Offer Name</th>
                                        <th scope="col">Offer By</th>
                                        <th scope="col">Offer Value</th>
                                        <th scope="col">Offer In</th>
                                        <th scope="col">Offer From</th>
                                        <th scope="col">Offer To</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0 ; ?>

                                      
                                       
                                 
                                    @foreach ($discounts as $discount_car)
                                        
                                    <tr>    
                                        <?php $i++; ?>
                                           <td>{{ $i }}</td>
                                      
                                        <td>{{ $discount_car->name }}</td>
                                        <td>{{ $discount_car->car->name }}</td>
                                        @if ($discount_car->discount_type == 'precent')
                                        <td>{{$discount_car->discount_value}}%</td>
                                           @else
                                        <td>{{$discount_car->discount_value}}</td>

                                        @endif

                                       <td>{{$discount_car->discount_number}}</td>
                                        <td>{{$discount_car->discount_start}}</td>
                                        <td>{{$discount_car->discount_end}}</td> 
                                        <td>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg-x">Edit</button>
                                            <div class="modal fade bd-example-modal-lg-x" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Offer</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Name</label>
                                                                        <input class="form-control" placeholder="name">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer By</label>
                                                                        <select class="form-control">
                                                                            <option>Car Name</option>
                                                                            <option>Car Brand</option>
                                                                            <option>Car Category</option>
                                                                            <option>Car Model</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer In</label>
                                                                        <select class="form-control">
                                                                            <option>One</option>
                                                                            <option>Two</option>
                                                                            <option>Three</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer Value</label>
                                                                        <input class="form-control" placeholder="Offer Value">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer Type</label>
                                                                        <select class="form-control">
                                                                            <option>Precent</option>
                                                                            <option>Flat</option>
                                                                        </select>
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer From</label>
                                                                        <input class="form-control" type="datetime-local">
                                                                    </div>
                                                                    <div style="text-align: left" class="mb-3">
                                                                        <label class="form-label">Offer To</label>
                                                                        <input class="form-control" type="datetime-local">
                                                                    </div>
                                                                    <div class="form-footer">
                                                                        <button class="btn btn-primary btn-block">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <button class="btn btn-danger" type="button">Delete</button>
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

            {{-- //////////////////////////////// --}}


        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection
