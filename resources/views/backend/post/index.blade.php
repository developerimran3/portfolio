 @extends('backend.layouts.app')
 @section('main')
     <!--start page wrapper -->
     <div class="page-wrapper">
         <div class="page-content">
             <!--end row-->
             <div class="col-md-12">
                 <div class="white_shd full ">
                     <div class="heading1 m-0 p-0 ">
                         <h2 class="">Posts</h2>
                         <div class="col-md-12">
                             @include('backend.layouts.components.message')
                         </div>
                         <a class="btn btn-sm btn-primary" href="{{ route('post.create') }}">Add Post</a>
                     </div>
                     <hr>
                     <div class="row column1">
                         <div class="col-md-12">
                             <div class=" full">
                                 <div class="heading1 margin_0">
                                     <table class="table table-bordered table-striped mb-none dataTable " id="dataTable">
                                         <thead>
                                             <tr class="new_post btn-primary " style="">
                                                 <th>#</th>
                                                 <th>Photo</th>
                                                 <th>Title</th>
                                                 <th>Category</th>
                                                 <th>Tag</th>
                                                 <th>Date</th>
                                                 <th>Action</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             @foreach ($posts as $post)
                                                 <tr class="new_post">
                                                     <td>{{ $loop->iteration }}</td>
                                                     <td>
                                                         @if ($post->galleries && $post->galleries->file_name)
                                                             <img src="{{ asset('media/post/' . $post->galleries->file_name) }}"
                                                                 alt="{{ $post->title }}" style="width: 80px;">
                                                         @else
                                                             <img src="{{ asset('media/no-image.png') }}" alt="No image"
                                                                 style="width: 80px;">
                                                         @endif
                                                     </td>
                                                     <td><a href="#">{{ $post->title }}</a></td>
                                                     <td>
                                                         @foreach ($post->categories as $cat)
                                                             <a href="#">{{ $cat->category_name }},</a>
                                                         @endforeach
                                                     </td>
                                                     <td>
                                                         @foreach ($post->tags as $tag)
                                                             <a href="#">{{ $tag->tag_name }},</a>
                                                         @endforeach
                                                     </td>
                                                     <td>{{ $post->created_at }}</td>
                                                     <td>
                                                         <a class="btn btn-sm btn-warning"
                                                             href="{{ route('post.edit', $post->id) }}">Edit</a>
                                                         <form class="d-inline"
                                                             action="{{ route('post.destroy', $post->id) }}" method="POST"
                                                             onsubmit="return confirm('Are you sure you want to delete this Post?');">
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
                                             <tr class="new_post btn-primary">
                                                 <th>#</th>
                                                 <th>Photo</th>
                                                 <th>Title</th>
                                                 <th>Category</th>
                                                 <th>Tag</th>
                                                 <th>Date</th>
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
     <!--end page wrapper -->
 @endsection
