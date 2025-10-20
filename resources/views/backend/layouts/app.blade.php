<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from codervent.com/synadmin/demo/vertical/ecommerce-add-new-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jun 2021 11:03:46 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->


    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap'" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <title>MD IMRAN HOSEN – Laravel Doveloper</title>

</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon"
                        href=" {{ asset('/') }}" />

                </div>
                <div>
                    <h4 class="logo-text">Synadmin</h4>
                </div>
                <div class="toggle-icon ms-auto">
                    <i class="bx bx-first-page"></i>
                </div>
            </div>
            {{-- nab bar --}}
            @include('backend.layouts.components.sidbar')
        </div>
        <!--end sidebar wrapper -->
        @include('backend.layouts.components.header')
        @section('main')
        @show
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2025. All right reserved. <samp>MD.IMRAN HOSEN</samp> </p>
        </footer>
    </div>
    <!--end wrapper-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.7/datatables.min.js"></script>

    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>

    <script>
        $("#dataTable").DataTable();
    </script>


    <script>
        const ProfilePhoto = document.getElementById('profile-photo');
        const ProfilePhotoPreview = document.getElementById('profile-photo-preview');
        const ProfilePhotoIcon = document.getElementById('profile-photo-icon');
        const ProfilePhotoClose = document.getElementById('profile-photo-close');

        ProfilePhoto.onchange = (event) => {
            const imageURL = URL.createObjectURL(event.target.files[0]);

            ProfilePhotoPreview.children[0].setAttribute('src', imageURL);
            ProfilePhotoIcon.style.display = 'none';
            ProfilePhotoClose.style.display = "block";

        };
        ProfilePhotoClose.onclick = (event) => {
            ProfilePhotoPreview.children[0].setAttribute('src', "");
            ProfilePhotoIcon.style.display = 'block';
            ProfilePhotoClose.style.display = "none";
        };
    </script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Profile Image JS -->


</body>

</html>
