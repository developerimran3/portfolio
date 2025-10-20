 @extends('backend.layouts.app')
 @section('main')
     <!--start page wrapper -->
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <h5 class="card-title">Add Post</h5>
                     <hr />
                     <div class="form-body mt-4">
                         <div class="row">
                             <div class="col-lg-8">
                                 <form action="{{ route('post.update', $posts->id) }}" method="POST"
                                     enctype="multipart/form-data">
                                     @csrf
                                     @method('PUT')
                                     <div class="border border-3 p-4 rounded">
                                         <div class="row mr-6 ">
                                             <div class="col-md-6">
                                                 <label for="title" class="form-label">Title</label>
                                                 <input type="text" name="title" class="form-control"
                                                     value="{{ old('title', $posts->title) }}">
                                             </div>
                                             <div class="col-md-3">
                                                 <p class="m-0">Category</p>
                                                 @foreach ($posts->categories as $item)
                                                     <input class="form-check-input" name="category[]" type="checkbox"
                                                         id="inlineCheckbox1" value="{{ $item->id }}" />
                                                     {{ $item->category_name }}<br>
                                                 @endforeach
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="desc" class="form-label">Description</label>
                                                 <textarea name="desc" class="form-control" cols="30" rows="5">{{ old('desc', $posts->desc) }}</textarea>
                                             </div>
                                             <div class="col-md-3">
                                                 <p class="m-0 pt-3">Tag</p>
                                                 @foreach ($posts->tags as $item)
                                                     <input class="form-check-input" name="tags[]" type="checkbox"
                                                         id="inlineCheckbox1" value="{{ $item->id }}" />
                                                     {{ $item->tag_name }}<br>
                                                 @endforeach
                                             </div>
                                             <div class="col-md-6">
                                                 <label class="form-label">Future Image</label>
                                                 <input type="file" name="photo" class="form-control">
                                             </div>
                                             <div class="col-2">
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary mt-4">
                                                         Add Post
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
     <!--end page wrapper -->
 @endsection
