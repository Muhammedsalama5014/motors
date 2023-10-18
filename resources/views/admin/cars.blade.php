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
                                            <form action="{{ route('Cars.store','test') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                                                @csrf
                                                               
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Main Image</label>
                                                        <input class="form-control" type="file" name='img'>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Internal Images</label>
                                                        <input class="form-control" type="file" name="imgs[]"  accept="image/*" multiple>
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Name ar</label>
                                                        <input class="form-control" placeholder="Car name" name='name_ar'>
                                                    </div>


                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Name en</label>
                                                        <input class="form-control" placeholder="Car name" name='name_en'>
                                                    </div>





                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Price per day</label>
                                                        <input class="form-control" type="number" placeholder="Car Price per day"  name='price'>
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Description ar</label>
                                                        <input class="form-control" placeholder="Car Description" name='desc_ar'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Description en</label>
                                                        <input class="form-control" placeholder="Car Description" name='desc_en'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Color ar </label>
                                                        <input class="form-control" placeholder="Car Color"  name='color_ar'>
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Color en</label>
                                                        <input class="form-control" placeholder="Car Color" name='color_en'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Seats ar</label>
                                                        <input class="form-control" placeholder="Car Seats" name='seats_ar'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Seats en</label>
                                                        <input class="form-control" placeholder="Car Seats"  name='seats_en'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">car Type ar </label>
                                                        <input class="form-control" placeholder="Gear Type"  name='type_ar'>
                                                    </div>


                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">car Type en</label>
                                                        <input class="form-control" placeholder="Gear Type"  name='type_en'>
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Model</label>
                                                        <select class="form-control" name='model_id'>
                                                          @foreach ($models as $model )
                                                               <option value ={{$model->id}}>{{$model->name}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Brand</label>
                                                        <select class="form-control" name='brand_id'>
                                                              @foreach ($brands as $brand )
                                                               <option value ={{$brand->id}}>{{$brand->name}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Category</label>
                                                        <select class="form-control" name='cat_id'>
                                                             @foreach ($cats as $cat )
                                                               <option value ={{$cat->id}}>{{$cat->name}}</option>
                                                          @endforeach
                                                        </select>
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
                                <h5>All Cars</h5>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Car Name</th>
                                        <th scope="col">Car Category</th>
                                        <th scope="col">Car Brand</th>
                                        <th scope="col">Car Model</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php $i = 0 ; ?>

                                        @foreach ($cars as $car )
                                         <tr>
                                         <?php $i++; ?>
                                           <td>{{ $i }}</td>

                                        <td>{{$car->name}}</td>
                                        
                                       <td>{{$car->cat->name}}</td>
                                          <td>{{$car->brand->name}}</td>

                                         <td>{{$car->modelcar->name}}</td>

                                        <td>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg-{{$car->id}}">Edit</button>
                                            <div class="modal fade bd-example-modal-lg-{{$car->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Car</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                 <form action="{{ route('Cars.update', $car->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                     <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Main Image</label>
                                                        <input class="form-control" type="file" name='img'>
                                                    </div>
{{--                                                     <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Internal Images</label>
                                                        <input class="form-control" type="file" name="imgs[]"  accept="image/*" multiple>
                                                    </div> --}}

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Name ar</label>
                                                        <input class="form-control" placeholder="Car name" name='name_ar'  value="{{ $car->getTranslation('name', 'ar') }}">
                                                    </div>


                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Name en</label>
                                                        <input class="form-control" placeholder="Car name" name='name_en'  value="{{ $car->getTranslation('name', 'en') }}">
                                                    </div>





                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Price per day</label>
                                                        <input class="form-control" type="number" placeholder="Car Price per day"  name='price' value="{{ $car->price }}">
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Description ar</label>
                                                        <input class="form-control" placeholder="Car Description" name='desc_ar'  value="{{ $car->getTranslation('desc', 'ar') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Description en</label>
                                                        <input class="form-control" placeholder="Car Description" name='desc_en'  value="{{ $car->getTranslation('desc', 'en') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Color ar </label>
                                                        <input class="form-control" placeholder="Car Color"  name='color_ar' value="{{ $car->getTranslation('color', 'ar') }}">
                                                    </div>

                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Color en</label>
                                                        <input class="form-control" placeholder="Car Color" name='color_en' value="{{ $car->getTranslation('color', 'en') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Seats ar</label>
                                                        <input class="form-control" placeholder="Car Seats" name='seats_ar' value="{{ $car->getTranslation('seats', 'ar') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Seats en</label>
                                                        <input class="form-control" placeholder="Car Seats"  name='seats_en' value="{{ $car->getTranslation('seats', 'en') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">car Type ar </label>
                                                        <input class="form-control" placeholder="Gear Type"  name='type_ar' value="{{ $car->getTranslation('type', 'ar') }}">
                                                    </div>


                                                      <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">car Type en</label>
                                                        <input class="form-control" placeholder="Gear Type"  name='type_en' value="{{ $car->getTranslation('type', 'en') }}">
                                                    </div>


                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Model</label>
                                                        <select class="form-control" name='model_id'>
                                                          @foreach ($models as $model )
                                                               <option value ={{$model->id}}>{{$model->name}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Brand</label>
                                                        <select class="form-control" name='brand_id'>
                                                              @foreach ($brands as $brand )
                                                               <option value ={{$brand->id}}>{{$brand->name}}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    <div style="text-align: left" class="mb-3">
                                                        <label class="form-label">Car Category</label>
                                                        <select class="form-control" name='cat_id'>
                                                             @foreach ($cats as $cat )
                                                               <option value ={{$cat->id}}>{{$cat->name}}</option>
                                                          @endforeach
                                                        </select>
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
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
 
@endsection
