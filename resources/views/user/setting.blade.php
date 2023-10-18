@extends('userlatouts.user_lay')
@section('content_body')
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Edit Profile</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Username</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">My Profile</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                        <form action='{{ route("usersetting.update", $user->id) }}' method="post" autocomplete="off" enctype="multipart/form-data">
                                         @csrf
                                    
                                        <div class="row mb-2">
                                            <div class="profile-title">
                                                <div class="media"><img class="img-70 rounded-circle" alt=""
                                                                        src="assets/images/user/7.jpg">
                                                    <div class="media-body">
                                                        <h3 class="mb-1 f-20 txt-primary">{{$user->name}}</h3>
                                                        <p class="f-12">{{$user->type}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" placeholder="name" name='name'>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email-Address</label>
                                            <input type="email" name='email' class="form-control" placeholder="your-email@domain.com">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" name='password' type="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Photo</label>
                                            <input class="form-control" name='img' accept="image/*" multiple type="file">
                                        </div>
                                        <div class="form-footer">
                                            <button class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                          <form class="card" action='{{ route("usersettingGeneralInfo.update") }}' method="post" autocomplete="off">
                                         @csrf
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">General Information</h4>
                                    <div class="card-options">
                                        <a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">ID Number</label>
                                                <input class="form-control" type="number" placeholder="ID Number" name="id_number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">ID Name</label>
                                                <input class="form-control" type="text" placeholder="ID Name" name="id_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Birthday</label>
                                                <input class="form-control" type="date" name="birth_day">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">License expiry date</label>
                                                <input class="form-control" type="date" name="License_expiry_date">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Job</label>
                                                <input class="form-control" type="text" placeholder="Job" name="job">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Work Address</label>
                                                <input class="form-control" type="text" placeholder="Work Address" name="work_address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Home Address</label>
                                                <input class="form-control" type="text" placeholder="Home Address" name="home_address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Information</button>
                                </div>
                            </form>
                            <!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

