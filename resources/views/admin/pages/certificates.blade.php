@extends('admin.layouts.app')

@section('title', 'dashboard')

@section('content') 

 <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add Certificate</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('certificate.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="certificateimage" class="form-label">Certificates</label>
                
                        <input type="file"
                               class="form-control"
                               id="certificateimage"
                               name="certificateimage[]"
                               multiple>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <!-- end col -->
    </div>
    <!-- end row -->



    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Banner Data</h4> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                       <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>All Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificates as $certificate)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                    
                                   <td>
                                        @php
                                            // extension nikalo  (jpg, png, pdf …)
                                            $ext = strtolower(pathinfo($certificate->certificateimage, PATHINFO_EXTENSION));
                                        @endphp
                                
                                        @if($ext === 'pdf')
                                            {{-- PDF ke लिये link / icon --}}
                                            <a href="{{ asset($certificate->certificateimage) }}" target="_blank">
                                                <i class="fas fa-file-pdf fa-2x text-danger me-1"></i> View PDF
                                            </a>
                                        @else
                                            {{-- Image ke लिये thumbnail --}}
                                            <img src="{{ asset($certificate->certificateimage) }}"
                                                 width="60" height="60"
                                                 class="rounded-circle"
                                                 alt="Certificate">
                                        @endif
                                    </td>
                    
                                    <td>
                                        <form action="{{ route('certificate.destroy', $certificate->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this certificate?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-4">Delete</button>
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

@endsection