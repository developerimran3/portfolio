 @extends('backend.layouts.app')
 @section('main')
     <!--start page wrapper -->
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body ">
                     <div class="form-body ">
                         <div class="row">
                             <div class="col-lg-12">
                                 <!--end row-->
                                 <div class="heading1 m-0 p-0 ">
                                     <h2 class="">Posts</h2>
                                     <div class="col-md-12">
                                         @include('backend.layouts.components.message')
                                     </div>
                                     <a class="btn btn-sm btn-primary" href="{{ route('student.register') }}">Add
                                         Student</a>
                                 </div>
                                 <hr>
                                 <div class="row column1">
                                     <div class="col-md-12">
                                         <div class=" full">
                                             <div class="heading1 margin_0">
                                                 <table class="table table-bordered table-striped mb-none dataTable "
                                                     id="dataTable">
                                                     <thead>
                                                         <tr class="new_post btn-primary " style="">
                                                             <th>#</th>
                                                             <th>Photo</th>
                                                             <th>Student Name</th>
                                                             <th>Email</th>
                                                             <th>Phone</th>
                                                             <th>Skill</th>
                                                             <th>Address</th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         @foreach ($student as $students)
                                                             <tr class="new_postkk">
                                                                 <td>{{ $loop->iteration }}</td>
                                                                 <td>
                                                                     <img src="{{ URL::to('media/student/' . $students->photo) }}"
                                                                         alt="{{ $students->name }}" style="width: 80px;">
                                                                 </td>
                                                                 <td><a href="#">{{ $students->firstName }}
                                                                         {{ $students->lastName }}</a>
                                                                 </td>
                                                                 <td>{{ $students->email }}</td>
                                                                 <td>{{ $students->phone }}</td>
                                                                 <td>{{ $students->skill }}</td>
                                                                 <td>{{ $students->address }}</td>
                                                                 <td>
                                                                     <a class="btn btn-sm btn-warning"
                                                                         href="">Edit</a>
                                                                     <form class="d-inline" action="" method="POST"
                                                                         onsubmit="return confirm('Are you sure you want to delete this Post?');">
                                                                         @csrf
                                                                         @method('DELETE')
                                                                         <button type="submit"
                                                                             class="btn btn-sm btn-danger">
                                                                             Delete
                                                                         </button>
                                                                     </form>

                                                                 </td>
                                                             </tr>
                                                         @endforeach
                                                     </tbody>
                                                     <tfoot>
                                                         <tr class="new_post btn-primary">
                                                             <th>#</th>
                                                             <th>Photo</th>
                                                             <th>Student Name</th>
                                                             <th>Email</th>
                                                             <th>Phone</th>
                                                             <th>Skill</th>
                                                             <th>Address</th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </tfoot>
                                                 </table>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--end row-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--end page wrapper -->
 @endsection
