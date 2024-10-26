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
                            <h3>Enquiry Details Table</h3>
                        </div>
                        <hr style="background-color: black;height:4px;margin-top: 5px;">
                    </div>
                    <div class="row">
                        <div class="col p-4">
                        <table class="table table-striped table-bordered text-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Trek Name</th>
                                <th>Trek Duration</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <button class="btn btn-info"><i class="bi bi-pen"></i></button>
                                    <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
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