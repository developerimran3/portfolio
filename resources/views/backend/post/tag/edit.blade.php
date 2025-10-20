 @extends('backend.layouts.app')
 @section('main')
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <div class="form-body mt-4">
                         <div class="row">
                             <div class="col-lg-6">
                                 <form action="{{ route('tag.update', $tags->id) }}" method="POST"
                                     enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="border border-3 p-4 rounded">
                                         <div class="col-md-12">
                                             @include('backend.layouts.components.message')
                                         </div>
                                         <h6 class="text-success">Update Tag</h6>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="tag_name" class="form-label">Tag Name</label>
                                                 <input type="text" name="tag_name" class="form-control"
                                                     value="{{ $tags->tag_name }}">
                                             </div>

                                             <div class="col-md-9">
                                                 <input type="hidden" class="form-control">
                                             </div>
                                             <div class="col-3">
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary mt-3 ">
                                                         Update Tag
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
