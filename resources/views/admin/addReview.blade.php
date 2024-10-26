@extends('admin.adminHeader')

@section('admin-main')
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
    </nav>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col">
                <div class="card bg-white text-dark p-5">
                    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <h1>Add Review Details</h1>
                            </div>
                        </div>
                        <hr style="background-color: black; height:4px; margin-top: 5px;">
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name">Person Name</label>
                                <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="image_name">Image</label>
                                <input type="file" name="image_name" class="form-control" required>
                                @error('image_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="review">Review</label>
                                <textarea name="review" class="form-control" rows="4" required>{{ old('review') }}</textarea>
                                @error('review')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
