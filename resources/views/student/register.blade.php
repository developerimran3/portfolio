@extends('student.layouts.app')
@section('main')
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col mx-auto">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Student Create</h3>
                                    <p>Already have an account? <a href="{{ route('student.login') }}">Student Login
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
                                    <form class="row g-3" action="{{ route('student.register') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-sm-6">
                                            <label for="inputFirstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="inputFirstName"
                                                placeholder="First Name" name="firstName" value="{{ old('firstName') }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="inputLastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputLastName"
                                                placeholder="Last Name" name="lastName" value="{{ old('lastName') }}">
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
                                            <label for="inputSkill" class="form-label">Skill</label>
                                            <input type="text" class="form-control" id="inputSkill" placeholder="Skill"
                                                name="skill" value="{{ old('skill') }}">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">
                                                Address</label>
                                            <input type="text" class="form-control" id="inputAddress" name="address"
                                                value="{{ old('address') }}">
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
                                                        class='bx bx-user'></i>Student Create</button>
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
