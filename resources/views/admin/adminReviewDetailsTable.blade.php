@extends('admin.adminHeader')

@section('admin-main')
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
    </nav>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col">
                <div class="card bg-white">
                    <div class="row p-3">
                        <div class="col-sm-8 text-dark">
                            <h3>Review Details Table</h3>
                        </div>
                        <div class="col-sm-4 text-end">
                            <a href="/admin-add-review">
                                <button class="btn btn-dark text-white"><i class="bi bi-plus"></i> Add Review</button>
                            </a>
                        </div>
                        <hr style="background-color: black;height:4px;margin-top: 5px;">
                    </div>

                    {{-- Display success message --}}
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col p-4">
                            <table class="table table-striped table-bordered text-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Review Image</th>
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $index => $review)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            @if($review->image_name)
                                            <img src="{{ asset($review->image_name) }}" alt="Review Image by {{ $review->name }}" width="50" height="50" class="img-thumbnail">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                        </td>
                                        <td>{{ $review->name }}</td>
                                        <td>{{ $review->review }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-info"><i class="bi bi-pen"></i></a>
                                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this review?');">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- Optional: Add pagination if you have a lot of reviews --}}
                            {{ $reviews->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
