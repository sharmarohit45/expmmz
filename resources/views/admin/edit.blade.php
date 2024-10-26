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
                    <div class="card-header">
                        <h3>Edit Trek Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="trek_heading" class="form-label">Trek Heading</label>
                                <input type="text" class="form-control" id="trek_heading" name="trek_heading" value="{{ $package->trek_heading }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="about_trek" class="form-label">About Trek</label>
                                <textarea class="form-control" id="about_trek" name="about_trek" required>{{ $package->about_trek }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $package->location }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="altitude" class="form-label">Altitude</label>
                                <input type="number" class="form-control" id="altitude" name="altitude" value="{{ $package->altitude }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="difficulty" class="form-label">Difficulty</label>
                                <input type="text" class="form-control" id="difficulty" name="difficulty" value="{{ $package->difficulty }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="best_time_to_visit" class="form-label">Best Time to Visit</label>
                                <input type="text" class="form-control" id="best_time_to_visit" name="best_time_to_visit" value="{{ $package->best_time_to_visit }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="base_camp" class="form-label">Base Camp</label>
                                <input type="text" class="form-control" id="base_camp" name="base_camp" value="{{ $package->base_camp }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" value="{{ $package->duration }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="route" class="form-label">Route (JSON format)</label>
                                <textarea class="form-control" id="route" name="route" required>{{ $package->route }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="key_attraction" class="form-label">Key Attraction (JSON format)</label>
                                <textarea class="form-control" id="key_attraction" name="key_attraction" required>{{ $package->key_attraction }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="preparation_tips" class="form-label">Preparation Tips (JSON format)</label>
                                <textarea class="form-control" id="preparation_tips" name="preparation_tips" required>{{ $package->preparation_tips }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="how_to_reach" class="form-label">How to Reach (JSON format)</label>
                                <textarea class="form-control" id="how_to_reach" name="how_to_reach" required>{{ $package->how_to_reach }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="images" class="form-label">Images</label>
                                <input type="file" class="form-control" id="images" name="images[]" multiple>
                            </div>

                            <div class="mb-3">
                                <label for="trek_times_season" class="form-label">Trek Times Season</label>
                                <input type="text" class="form-control" id="trek_times_season" name="trek_times_season" value="{{ $package->trek_times_season }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="trek_times_months" class="form-label">Trek Times Months</label>
                                <input type="text" class="form-control" id="trek_times_months" name="trek_times_months" value="{{ $package->trek_times_months }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Trek</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
