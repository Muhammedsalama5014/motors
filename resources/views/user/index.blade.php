@extends('userlatouts.user_lay')
@section('content_body')
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
                    <div class="col-xl-12 col-md-12 dash-xl-100">
                        <div class="card profile-greeting">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="greeting-user">
                                            <h1>Hello, {{$user->name}}</h1>
                                            <p>Welcome back, your dashboard is ready!</p>
                                            <a class="btn btn-outline-white_color" href="#">
                                                Get Started
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cartoon-img">
                                    <img class="img-fluid" src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

