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
                            <h3>Booking Details Table</h3>
                        </div>
                        <hr style="background-color: black;height:4px;margin-top: 5px;">
                    </div>
                    <div class="row">
                        <div class="col p-4">
                            <table class="table table-striped table-bordered text-dark">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile No.</th>
                                        <th>Trekk Name</th>
                                        <th>Address</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td> <!-- Displaying a sequential number -->
                                            <td>{{ $booking->name }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td>{{ $booking->mobile_no }}</td>
                                            <td>{{ $booking->trekk_name }}</td>
                                            <td>{{ $booking->address }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
    </div>
</div>
@endsection
