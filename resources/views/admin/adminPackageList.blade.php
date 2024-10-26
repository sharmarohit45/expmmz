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
                            <h3>Trek Details Table</h3>
                        </div>
                        <div class="col-sm-4 text-end">
                            <a href="/admin-add-trek">
                                <button class="btn btn-dark"><i class="bi bi-plus"></i></button>
                            </a>
                        </div>
                        <hr style="background-color: black; height:4px; margin-top: 5px;">
                    </div>
                    <table class="table table-striped text-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Trek Heading</th>
                                <th>Location</th>
                                <th>Duration</th>
                                <th>More Details</th> <!-- Add a new column for toggle -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $package)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $package->trek_heading }}</td>
                                <td>{{ $package->location }}</td>
                                <td>{{ $package->duration }}</td>

                                <!-- Button to toggle additional details -->
                                <td>
                                    <button class="btn btn-primary" data-bs-toggle="collapse" href="#details-{{ $package->id }}">
                                        Show Details
                                    </button>
                                </td>

                                <!-- Action buttons (edit/delete) -->
                                <td>
                                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-info">
                                        <i class="bi bi-pen"></i>
                                    </a>
                                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Collapsible row for additional details -->
                            <tr class="collapse" id="details-{{ $package->id }}">
                                <td colspan="6">
                                    <div class="card card-body bg-white text-dark"> <!-- White background and black text -->
                                        <strong>About Trek:</strong> {{ $package->about_trek }} <br>
                                        <strong>Altitude:</strong> {{ $package->altitude }} <br>
                                        <strong>Difficulty:</strong> {{ $package->difficulty }} <br>
                                        <strong>Best Time to Visit:</strong> {{ $package->best_time_to_visit }} <br>
                                        <strong>Base Camp:</strong> {{ $package->base_camp }} <br>

                                        <!-- Route (Array) -->
                                        <strong>Route:</strong>
                                        <ul>
                                            @if(is_array(json_decode($package->route, true)))
                                                @foreach(json_decode($package->route, true) as $route)
                                                    <li>{{ $route }}</li>
                                                @endforeach
                                            @endif
                                        </ul>

                                        <!-- Key Attraction (Nested Array) -->
                                        <strong>Key Attraction:</strong>
                                        <ul>
                                            @if(is_array(json_decode($package->key_attraction, true)))
                                                @php
                                                    $keyAttraction = json_decode($package->key_attraction, true);
                                                @endphp
                                                @foreach($keyAttraction['heading'] as $index => $heading)
                                                    <li>
                                                        <strong>{{ $heading }}</strong>: {{ $keyAttraction['paragraph'][$index] ?? '' }}
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                        <!-- Preparation Tips (Nested Array) -->
                                        <strong>Preparation Tips:</strong>
                                        <ul>
                                            @if(is_array(json_decode($package->preparation_tips, true)))
                                                @php
                                                    $preparationTips = json_decode($package->preparation_tips, true);
                                                @endphp
                                                @foreach($preparationTips['heading'] as $index => $heading)
                                                    <li>
                                                        <strong>{{ $heading }}</strong>: {{ $preparationTips['paragraph'][$index] ?? '' }}
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                        <!-- How to Reach (Nested Array) -->
                                        <strong>How to Reach:</strong>
                                        <ul>
                                            @if(is_array(json_decode($package->how_to_reach, true)))
                                                @php
                                                    $howToReach = json_decode($package->how_to_reach, true);
                                                @endphp
                                                @foreach($howToReach['heading'] as $index => $heading)
                                                    <li>
                                                        <strong>{{ $heading }}</strong>: {{ $howToReach['paragraph'][$index] ?? '' }}
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>

                                        <!-- Images (Array) -->
                                        <strong>Images:</strong>
                                        <div>
                                            @if(is_array(json_decode($package->images, true)))
                                                @foreach(json_decode($package->images, true) as $image)
                                                    <img src="{{ Storage::url($image) }}" alt="Image" width="100" />
                                                @endforeach
                                            @endif
                                        </div>

                                        <strong>Trek Times Season:</strong> {{ $package->trek_times_season }} <br>
                                        <strong>Trek Times Months:</strong> {{ $package->trek_times_months }} <br>
                                    </div>
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
