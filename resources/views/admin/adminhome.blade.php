@extends('admin.adminHeader')
@section('admin-main')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <button class="btn btn-dark" id="menu-toggle"><i class="bi bi-list"></i></button>
        </nav>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard Overview</h1>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <a href="/admin-agents" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Treks</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/viewpropertylist" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Enquiries</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/admin/enquiries" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Clients</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 text-center">
                    <a href="/admin-agents" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Bookings</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/viewpropertylist" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Reviews</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 text-center">
                    <a href="/admin/enquiries" style="text-decoration: none">
                        <div class="card">
                            <div class="card-header">Total Contacts</div>
                            <div class="widget">
                                <h2 class="text-center text-white">0</h2>
                            </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
