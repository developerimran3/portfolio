 @extends('backend.layouts.app')
 @section('main')
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <div class="form-body mt-4">
                         <div class="row">
                             <div class="col-lg-6">
                                 <form action="{{ route('category.update', $categories->id) }}" method="POST"
                                     enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="border border-3 p-4 rounded">
                                         <div class="col-md-12">
                                             @include('backend.layouts.components.message')
                                         </div>
                                         <h6 class="text-success">Add New Category</h6>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="category_name" class="form-label">Category Name</label>
                                                 <input type="text" name="category_name" class="form-control"
                                                     value="{{ $categories->category_name }}">
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
                                                         Update Category
                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                         <!--end row-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
