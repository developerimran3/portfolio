 @extends('backend.layouts.app')
 @section('main')
     <!--start page wrapper -->
     <div class="page-wrapper">
         <div class="page-content">
             <div class="card">
                 <div class="card-body p-4">
                     <div class="form-body">
                         <div class="col-md-12">
                             @include('backend.layouts.components.message')
                         </div>
                         <h4 class="text-success">Add New Portfolio</h4>
                         <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                                 {{-- Portfolio --}}
                                 <div class="col-lg-10">
                                     <div class="border border-3 p-4 rounded">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <label for="portfolio_title" class="form-label">Portfolio Title</label>
                                                 <input type="text" name="portfolio_title" class="form-control"
                                                     placeholder="Add Title" value="{{ old('portfolio_title') }}">
                                             </div>
                                             <div class="col-md-12 mt-3">
                                                 <label for="description" class="form-label">Description</label>
                                                 <textarea name="portfolio_desc" class="form-control" cols="30" rows="12">{{ old('portfolio_desc') }}</textarea>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 {{-- Category, Fiture Image, Submit --}}
                                 <div class="col-lg-2">
                                     <div class="border border-3 p-4 rounded">
                                         <div class="row">
                                             <div class="col-md-12">
                                                 <div class="d-grid">
                                                     <button type="submit" class="btn btn-primary mt-3 ">
                                                         Add Portfolio
                                                     </button>
                                                 </div>
                                             </div>
                                             <div class="col-md-12 mt-5 p-0">
                                                 <h4 class="text-success">Categories</h4>
                                                 {{-- @foreach ($categories as $item)
                                                     <input class="form-check-input" name="category[]" type="checkbox"
                                                         id="inlineCheckbox1" value="{{ $item->id }}" />
                                                     {{ $item->category_name }}<br>
                                                 @endforeach --}}
                                             </div>
                                             <div class="col-md-12 mt-4 p-0">
                                                 <label class="form-label">Featured image</label>
                                                 <input type="file" name="featured_image" class="form-control">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 {{-- Portfolio Setting --}}
                                 <div class="col-lg-10 mt-5">
                                     <h4 class="text-success">Portfolio Setting</h4>
                                     <div class="border border-3 p-4 rounded">
                                         <div class="row">
                                             <div class="col-md-6">
                                                 <label for="project_image" class="form-label">Project Image</label>
                                                 <input type="file" class="form-control" name="project_image[]" multiple>
                                             </div>
                                             <div class="col-md-6">
                                                 <label for="client_name" class="form-label">Client Name</label>
                                                 <input type="text" name="client_name" class="form-control"
                                                     value="{{ old('client_name') }}">
                                             </div>
                                             <div class="col-md-6 mt-3">
                                                 <label for="project_date" class="form-label">Project Date</label>
                                                 <input type="date" name="project_date" class="form-control"
                                                     value="{{ old('project_date') }}">
                                             </div>
                                             <div class="col-md-6 mt-3">
                                                 <label for="project_url" class="form-label">Project URL</label>
                                                 <input type="text" name="project_url" class="form-control"
                                                     value="{{ old('project_url') }}">
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </form>
                         <!--end row-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
