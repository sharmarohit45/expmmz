@extends('admin.adminHeader')

@section('admin-main')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <h2 class="mt-4">Trek Packages List</h2>
        <!-- Add Trek Button -->
        <a href="/admin-add-trek" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Add New Trek
        </a>

        <div class="card bg-white text-dark p-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Trek Heading</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Altitude</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $trek)
                    <tr>
                        <td>{{ $trek->trek_heading }}</td>
                        <td>{{ $trek->price }}</td>
                        <td>{{ $trek->location }}</td>
                        <td>{{ $trek->altitude }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('treks.edit', $trek->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('treks.destroy', $trek->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this trek?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection