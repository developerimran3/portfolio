@extends('teacher.layouts.app')
@section('main')
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Teacher Create</h3>
                                    <p>Already have an account? <a href="{{ route('teacher.login') }}">Teacher Login
                                            here</a>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    @include('backend.layouts.components.message')
                                </div>
                                <div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
                                    <hr />
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="{{ route('teacher.register') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-12">
                                            <label for="name" class="form-label"> Name</label>
                                            <input type="text" class="form-control" id="name" placeholder=" Name"
                                                name="name" value="{{ old('name') }}">
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="username" class="form-label">User Name</label>
                                            <input type="text" class="form-control" id="username"
                                                placeholder="User Name" name="username" value="{{ old('username') }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email
                                                Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress"
                                                placeholder="example@user.com" name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputPhoneNumber" class="form-label">Phone</label>
                                            <input type="text" class="form-control" id="inputPhoneNumber"
                                                placeholder="017++" name="phone" value="{{ old('phone') }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="degree" class="form-label">Degree</label>
                                            <input type="text" class="form-control" id="degree" placeholder="Degree"
                                                name="degree" value="{{ old('degree') }}">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Photo</label>
                                            <input type="file" class="form-control" name="photo">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" placeholder="Enter Password" name="password">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Conform
                                                Password</label>
                                            <div class="input-group" id="show_conform_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" placeholder="Enter conform Password"
                                                    name="password_confirmation"> <a href="javascript:;"
                                                    class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I
                                                    read and agree to Terms & Conditions</label>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class='bx bx-user'></i>Teacher Create</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
