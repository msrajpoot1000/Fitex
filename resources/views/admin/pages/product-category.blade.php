@extends('admin.layouts.app')

@section('title', 'dashboard | Add Project Category')

@section('content') 

 <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Product Category</h4>
                        </div>
                    </div>
                    <div class="card-body">
            
                        <form action="{{ route('productcategory.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="productcategory" class="form-label">Product Category</label>
                                        <input type="text" class="form-control" placeholder="Project Category" id="productcategory" name="productcategory" value="">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="productcategoryimage" class="form-label">Product Category Image</label>
                                        <input type="file" class="form-control" placeholder="Project Category" id="productcategoryimage" name="productcategoryimage" value="">
                                    </div>
                                </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">View Product Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
        
                                <thead>
                                    <tr>
                                        <th>SN.</th>
                                        <th>Product Category</th>
                                        <th>Product Category Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $category->productcategory }}</td>
                                        <td>
                                            <img src="{{ $category->productcategoryimage }}" width="40" height="40" class="rounded-circle" alt="">
                                        </td>
                                        <td>
                                             <a href="{{ route('productcategory.edit', $category->id) }}" class="btn btn-warning btn-sm px-4">Edit</a>
                                             
                                            <form action="{{ route('productcategory.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                             @csrf
                                                 @method('DELETE')
                                                 <button type="submit" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are you sure you want to delete this Product Category?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
        
@endsection


@section('scripts')
<script src="{{ URL::asset('assets/admin/libs/eva-icons/eva.min.js') }}"></script>

<!-- CKEditor Script -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('editor1');
        });
    </script

@endsection