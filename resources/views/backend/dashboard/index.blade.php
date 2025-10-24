@extends('backend.layouts.app')
@section('main')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Posts</p>
                                    <h5 class="mb-0">{{ $post }}</h5>
                                </div>
                                <div class="ms-auto">
                                    <i class="bx bx-cart font-30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart1"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Income</p>
                                    <h5 class="mb-0">$52,945</h5>
                                </div>
                                <div class="ms-auto">
                                    <i class="bx bx-wallet font-30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart2"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Users</p>
                                    <h5 class="mb-0">{{ $user }}</h5>
                                </div>
                                <div class="ms-auto">
                                    <i class="bx bx-group font-30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart3"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Comments</p>
                                    <h5 class="mb-0">869</h5>
                                </div>
                                <div class="ms-auto">
                                    <i class="bx bx-chat font-30"></i>
                                </div>
                            </div>
                        </div>
                        <div class="" id="chart4"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
