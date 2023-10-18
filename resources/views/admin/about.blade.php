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
                                <h5>About us</h5>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <form action="{{ route('About.update', $about) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Header title EN</label>
                                        <input class="form-control" placeholder="name ar" name="title_head_en" value="{{ $about->getTranslation('title_head', 'en')}}" required>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Header title Ar</label>
                                        <input class="form-control" placeholder="name ar" name="title_head_ar" value="{{ $about->getTranslation('title_head', 'ar') }}" required>
                                    </div>


                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Header body En</label>
                                        <textarea class="form-control" placeholder="name en" name="desc_head_en" required>{{ $about->getTranslation('desc_head', 'en') }}</textarea>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Header body Ar</label>
                                        <textarea class="form-control" placeholder="name en" name="desc_head_ar" required>{{ $about->getTranslation('desc_head', 'ar') }}</textarea>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">bottom title EN</label>
                                        <input class="form-control" placeholder="name ar" name="title_bottom_en" value="{{ $about->getTranslation('title_bottom', 'en') }}" required>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">bottom title Ar</label>
                                        <input class="form-control" placeholder="name ar" name="title_bottom_ar" value="{{ $about->getTranslation('title_bottom', 'ar')}}" required>
                                    </div>

                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">bottom body En</label>
                                        <textarea class="form-control" placeholder="name en" name="desc_bottom_en" required>{{ $about->getTranslation('desc_bottom', 'en')}}</textarea>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">bottom body Ar</label>
                                        <textarea class="form-control" placeholder="name en" name="desc_bottom_ar" required>{{ $about->getTranslation('desc_bottom', 'ar')}}</textarea>
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Main Image</label>
                                        <input class="form-control" type="file" name='img' value="{{$about->img}}" >
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
    <!-- Container-fluid Ends-->
@endsection
