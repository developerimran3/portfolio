 @extends('backend.layouts.app')
 @section('main')
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <div class="form-body mt-4">
                         <div class="row">
                             <div class="col-lg-6">
                                 <form action="{{ route('tag.store') }}" method="POST" enctype="multipart/form-data">
                                     @csrf
                                     <div class="border border-3 p-4 rounded">
                                         <div class="col-md-12">
                                             @include('backend.layouts.components.message')
                                         </div>
                                         <h6 class="text-success">Add New Tag</h6>
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="tag_name" class="form-label">Tag Name</label>
                                                 <input type="text" name="tag_name" class="form-control"
                                                     value="{{ old('tag_name') }}">
                                             </div>

                                             <div class="col-3">
                                                 <label for="tag_name" class="form-label"></label>
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary mt-2">
                                                         Add Tag
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
                                             <h6 class="text-success">All Tags</h6>
                                         </div>
                                         <table class="table table-bordered table-striped table-hover" id="dataTable">
                                             <thead>
                                                 <tr class="portfolio btn-primary">
                                                     <th>#</th>
                                                     <th>Name</th>
                                                     <th>Slug</th>
                                                     <th>created at</th>
                                                     <th>Acton</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 @foreach ($tags as $item)
                                                     <tr>
                                                         <td>{{ $loop->iteration }}</td>
                                                         <td>{{ $item->tag_name }}</td>
                                                         <td>{{ $item->slug }}</td>
                                                         <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                                         </td>
                                                         <td>
                                                             <a class="btn btn-sm btn-warning"
                                                                 href="{{ route('tag.edit', $item->id) }}">Edit</a>
                                                             <form class="d-inline"
                                                                 action="{{ route('tag.destroy', $item->id) }}"
                                                                 method="POST"
                                                                 onsubmit="return confirm('Are you sure you want to delete this Tag?');">
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
