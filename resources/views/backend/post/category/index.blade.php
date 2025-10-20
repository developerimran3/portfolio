 @extends('backend.layouts.app')
 @section('main')
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <div class="form-body mt-4">
                         <div class="row">
                             <div class="col-lg-6">
                                 <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                                     @csrf
                                     <div class="border border-3 p-4 rounded">
                                         <div class="col-md-12">
                                             @include('backend.layouts.components.message')
                                         </div>
                                         <h6 class="text-success">Add New Category</h6>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="category_name" class="form-label">Category Name</label>
                                                 <input type="text" name="category_name" class="form-control"
                                                     value="{{ old('category_name') }}">
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="photo" class="form-label">Photo</label>
                                                 <input type="file" name="photo" class="form-control">
                                             </div>
                                             <div class="col-md-9">
                                                 <input type="hidden" class="form-control">
                                             </div>
                                             <div class="col-3">
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary mt-3 ">
                                                         Add Category
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             </div>

                             {{-- Received & Register Document --}}
                             <div class="col-lg-6">
                                 <div class="border border-3 p-4 rounded">
                                     <div class="row g-3">
                                         <div class="col-md-7">
                                             <h6 class="text-success">All Categorys</h6>
                                         </div>
                                         <table class="table table-bordered table-striped table-hover" id="dataTable">
                                             <thead>
                                                 <tr class="portfolio btn-primary">
                                                     <th>#</th>
                                                     <th>Logo</th>
                                                     <th>Name</th>
                                                     <th>Slug</th>
                                                     <th>created at</th>
                                                     <th>Acton</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($categories as $item)
                                                     <tr>
                                                         <td>{{ $loop->iteration }}</td>
                                                         <td><img src="{{ URL::to('media/category/' . $item->photo) }}"
                                                                 alt="" style="width: 70px"></td>
                                                         <td>{{ $item->category_name }}</td>
                                                         <td>{{ $item->slug }}</td>
                                                         <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                         </td>
                                                         <td>
                                                             <a class="btn btn-sm btn-warning"
                                                                 href="{{ route('category.edit', $item->id) }}">Edit</a>
                                                             <form class="d-inline"
                                                                 action="{{ route('category.destroy', $item->id) }}"
                                                                 method="POST"
                                                                 onsubmit="return confirm('Are you sure you want to delete this Category?');">
                                                                 @csrf
                                                                 @method('DELETE')
                                                                 <button type="submit" class="btn btn-sm btn-danger">
                                                                     Delete
                                                                 </button>
                                                             </form>
                                                         </td>
                                                     </tr>
                                                 @endforeach
                                             </tbody>

                                             <tfoot>
                                                 <tr class="btn-primary">
                                                     <th>#</th>
                                                     <th>Name</th>
                                                     <th>Slug</th>
                                                     <th>Logo</th>
                                                     <th>created at</th>
                                                     <th>Acton</th>
                                                 </tr>
                                             </tfoot>
                                         </table>
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
 @endsection
