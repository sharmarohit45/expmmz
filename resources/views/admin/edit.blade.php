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
                    <form action="{{ route('packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trek_heading">Trek Heading</label>
                                <input type="text" name="trek_heading" class="form-control" value="{{ old('trek_heading', $package->trek_heading) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="about_trek">About Trek</label>
                                <textarea name="about_trek" class="form-control" rows="4" required>{{ old('about_trek', $package->about_trek) }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" value="{{ old('location', $package->location) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="altitude">Altitude</label>
                                <input type="text" name="altitude" class="form-control" value="{{ old('altitude', $package->altitude) }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="difficulty">Difficulty</label>
                                <input type="text" name="difficulty" class="form-control" value="{{ old('difficulty', $package->difficulty) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="best_time_to_visit">Best Time to Visit</label>
                                <input type="text" name="best_time_to_visit" class="form-control" value="{{ old('best_time_to_visit', $package->best_time_to_visit) }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="base_camp">Base Camp</label>
                                <input type="text" name="base_camp" class="form-control" value="{{ old('base_camp', $package->base_camp) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" class="form-control" value="{{ old('duration', $package->duration) }}" required>
                            </div>
                        </div>

                        <!-- Route (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="route">Route</label>
                                <div id="route-container">
                                    @foreach(json_decode($package->route, true) as $route)
                                        <input type="text" name="route[]" class="form-control mb-2" value="{{ $route }}" placeholder="Enter Route">
                                    @endforeach
                                    <input type="text" name="route[]" class="form-control mb-2" placeholder="Enter Route">
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addRoute()">Add Route</button>
                            </div>
                        </div>

                        <!-- Key Attraction (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="key_attraction">Key Attraction</label>
                                <div id="key-attraction-container">
                                    @foreach(json_decode($package->key_attraction, true) as $attraction)
                                        <input type="text" name="key_attraction[heading][]" class="form-control mb-2" placeholder="Heading" value="{{ $attraction['heading'] }}">
                                        <textarea name="key_attraction[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph">{{ $attraction['paragraph'] }}</textarea>
                                    @endforeach
                                    <input type="text" name="key_attraction[heading][]" class="form-control mb-2" placeholder="Heading">
                                    <textarea name="key_attraction[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addAttraction()">Add Attraction</button>
                            </div>
                        </div>

                        <!-- Preparation and Tips (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="preparation_tips">Preparation and Tips</label>
                                <div id="preparation-tips-container">
                                    @foreach(json_decode($package->preparation_tips, true) as $tip)
                                        <input type="text" name="preparation_tips[heading][]" class="form-control mb-2" placeholder="Heading" value="{{ $tip['heading'] }}">
                                        <textarea name="preparation_tips[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph">{{ $tip['paragraph'] }}</textarea>
                                    @endforeach
                                    <input type="text" name="preparation_tips[heading][]" class="form-control mb-2" placeholder="Heading">
                                    <textarea name="preparation_tips[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addTip()">Add Tip</button>
                            </div>
                        </div>

                        <!-- How to Reach (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="how_to_reach">How to Reach</label>
                                <div id="how-to-reach-container">
                                    @foreach(json_decode($package->how_to_reach, true) as $reach)
                                        <input type="text" name="how_to_reach[heading][]" class="form-control mb-2" placeholder="Heading" value="{{ $reach['heading'] }}">
                                        <textarea name="how_to_reach[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph">{{ $reach['paragraph'] }}</textarea>
                                    @endforeach
                                    <input type="text" name="how_to_reach[heading][]" class="form-control mb-2" placeholder="Heading">
                                    <textarea name="how_to_reach[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addHowToReach()">Add How to Reach</button>
                            </div>
                        </div>

                        <!-- Images (Multiple) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="images">Upload Images</label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>

                        <!-- Trek Times (Season) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trek_times_season">Trek Times (Season)</label>
                                <select name="trek_times_season" class="form-control" required>
                                    <option value="Winter" {{ $package->trek_times_season == 'Winter' ? 'selected' : '' }}>Winter</option>
                                    <option value="Summer" {{ $package->trek_times_season == 'Summer' ? 'selected' : '' }}>Summer</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="trek_times_months">Trek Times (Months)</label>
                                <select name="trek_times_months" class="form-control" required>
                                    @foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month)
                                        <option value="{{ $month }}" {{ $package->trek_times_months == $month ? 'selected' : '' }}>{{ $month }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Trek</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function addRoute() {
    const container = document.getElementById('route-container');
    const input = document.createElement('input');
    input.type = 'text';
    input.name = 'route[]';
    input.className = 'form-control mb-2';
    input.placeholder = 'Enter Route';
    container.appendChild(input);
}

function addAttraction() {
    const container = document.getElementById('key-attraction-container');
    const headingInput = document.createElement('input');
    headingInput.type = 'text';
    headingInput.name = 'key_attraction[heading][]';
    headingInput.className = 'form-control mb-2';
    headingInput.placeholder = 'Heading';
    
    const paragraphInput = document.createElement('textarea');
    paragraphInput.name = 'key_attraction[paragraph][]';
    paragraphInput.className = 'form-control mb-2';
    paragraphInput.placeholder = 'Paragraph';
    
    container.appendChild(headingInput);
    container.appendChild(paragraphInput);
}

function addTip() {
    const container = document.getElementById('preparation-tips-container');
    const headingInput = document.createElement('input');
    headingInput.type = 'text';
    headingInput.name = 'preparation_tips[heading][]';
    headingInput.className = 'form-control mb-2';
    headingInput.placeholder = 'Heading';
    
    const paragraphInput = document.createElement('textarea');
    paragraphInput.name = 'preparation_tips[paragraph][]';
    paragraphInput.className = 'form-control mb-2';
    paragraphInput.placeholder = 'Paragraph';
    
    container.appendChild(headingInput);
    container.appendChild(paragraphInput);
}

function addHowToReach() {
    const container = document.getElementById('how-to-reach-container');
    const headingInput = document.createElement('input');
    headingInput.type = 'text';
    headingInput.name = 'how_to_reach[heading][]';
    headingInput.className = 'form-control mb-2';
    headingInput.placeholder = 'Heading';
    
    const paragraphInput = document.createElement('textarea');
    paragraphInput.name = 'how_to_reach[paragraph][]';
    paragraphInput.className = 'form-control mb-2';
    paragraphInput.placeholder = 'Paragraph';
    
    container.appendChild(headingInput);
    container.appendChild(paragraphInput);
}
</script>
@endsection
