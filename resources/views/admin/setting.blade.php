>@extends('adminlayouts.master')

@section('adminContent')
    <?php
    $setting = \App\Models\Setting::find(1);
    ?>
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
                                <h5>Site Data</h5>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <form action="{{ route('Setting.update', $setting) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')


                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control"  name="email" value="{{ $setting->email}}"  >
                                    </div>

                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">phone</label>
                                        <input class="form-control"  name="phone" value="{{ $setting->phone}}"  >
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Mobile</label>
                                        <input class="form-control"  name="mobile" value="{{ $setting->mobile}}"  >
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">First Address</label>
                                        <input class="form-control"  name="address1" value="{{ $setting->address1}}"  >
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Second Address</label>
                                        <input class="form-control"  name="address2" value="{{ $setting->address2}}"  >
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Open Time</label>
                                        <input class="form-control"  name="open" value="{{ $setting->open}}"  >
                                    </div>
                                    <div style="text-align: left" class="mb-3">
                                        <label class="form-label">Iframe link for map</label>
                                        <input class="form-control"  name="map" value="{{ $setting->map}}"  >
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
