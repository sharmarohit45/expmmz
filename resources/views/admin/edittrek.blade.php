@extends('admin.adminHeader')
@section('admin-main')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <h2 class="mt-4">Edit Trek: {{ $trek->trek_heading }}</h2>

        <div class="card bg-white text-dark p-5">
            <form action="{{ route('treks.update', $trek->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Trek Heading -->
                <div class="mb-3">
                    <label class="form-label">Trek Heading</label>
                    <input type="text" name="trek_heading" class="form-control" value="{{ old('trek_heading', $trek->trek_heading) }}">
                </div>

                <!-- Price -->
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" value="{{ old('price', $trek->price) }}">
                </div>

                <!-- About Trek -->
                <div class="mb-3">
                    <label class="form-label">About Trek</label>
                    <textarea name="about_trek" class="form-control">{{ old('about_trek', $trek->about_trek) }}</textarea>
                </div>

                <!-- Location -->
                <div class="mb-3">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" value="{{ old('location', $trek->location) }}">
                </div>
                <!-- Best Time to Visit -->
                <div class="mb-3">
                    <label class="form-label">Best Time to Visit</label>
                    <input type="text" name="best_time_to_visit" class="form-control" value="{{ old('best_time_to_visit', $trek->best_time_to_visit) }}">
                </div>

                <!-- Base Camp -->
                <div class="mb-3">
                    <label class="form-label">Base Camp</label>
                    <input type="text" name="base_camp" class="form-control" value="{{ old('base_camp', $trek->base_camp) }}">
                </div>

                <!-- Duration -->
                <div class="mb-3">
                    <label class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" value="{{ old('duration', $trek->duration) }}">
                </div>

                <!-- Altitude -->
                <div class="mb-3">
                    <label class="form-label">Altitude</label>
                    <input type="text" name="altitude" class="form-control" value="{{ old('altitude', $trek->altitude) }}">
                </div>

                <!-- Difficulty -->
                <div class="mb-3">
                    <label class="form-label">Difficulty</label>
                    <input type="text" name="difficulty" class="form-control" value="{{ old('difficulty', $trek->difficulty) }}">
                </div>

                <!-- Dynamic fields for Route -->
                <div class="mb-3">
                    <label class="form-label">Route</label>
                    <div id="routeContainer">
                        @foreach($trek->route as $index => $route)
                        <div class="input-group mb-2">
                            <input type="text" name="route[{{ $index }}]" class="form-control" value="{{ old('route.' . $index, $route) }}" placeholder="Enter Route">
                            <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('route')">Add Route</button>
                    <input type="hidden" id="routeIndex" value="{{ count($trek->route) }}">
                </div>

                <!-- Key Attractions -->
                <div class="mb-3">
                    <label class="form-label">Key Attractions</label>
                    <div id="key_attractionContainer">
                        @foreach($trek->key_attraction as $index => $attraction)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="key_attraction[{{ $index }}][heading]" class="form-control" value="{{ old('key_attraction.' . $index . '.heading', $attraction['heading']) }}" placeholder="Attraction Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="key_attraction[{{ $index }}][paragraph]" class="form-control" placeholder="Details about attraction">{{ old('key_attraction.' . $index . '.paragraph', $attraction['paragraph']) }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('key_attraction')">Add Key Attraction</button>
                    <input type="hidden" id="key_attractionIndex" value="{{ count($trek->key_attraction) }}">
                </div>

                <!-- Preparation Tips -->
                <div class="mb-3">
                    <label class="form-label">Preparation Tips</label>
                    <div id="preparation_tipsContainer">
                        @foreach($trek->preparation_tips as $index => $tip)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="preparation_tips[{{ $index }}][heading]" class="form-control" value="{{ old('preparation_tips.' . $index . '.heading', $tip['heading']) }}" placeholder="Tip Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="preparation_tips[{{ $index }}][paragraph]" class="form-control" placeholder="Details about tip">{{ old('preparation_tips.' . $index . '.paragraph', $tip['paragraph']) }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('preparation_tips')">Add Preparation Tip</button>
                    <input type="hidden" id="preparation_tipsIndex" value="{{ count($trek->preparation_tips) }}">
                </div>

                <!-- How to Reach -->
                <div class="mb-3">
                    <label class="form-label">How to Reach</label>
                    <div id="how_to_reachContainer">
                        @foreach($trek->how_to_reach as $index => $reach)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="how_to_reach[{{ $index }}][heading]" class="form-control" value="{{ old('how_to_reach.' . $index . '.heading', $reach['heading']) }}" placeholder="Route Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="how_to_reach[{{ $index }}][paragraph]" class="form-control" placeholder="Details about how to reach">{{ old('how_to_reach.' . $index . '.paragraph', $reach['paragraph']) }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('how_to_reach')">Add How to Reach</button>
                    <input type="hidden" id="how_to_reachIndex" value="{{ count($trek->how_to_reach) }}">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Trek</button>
            </form>
        </div>
    </div>
</div>

<script>
function addDynamicField(fieldType) {
    const indexField = document.getElementById(`${fieldType}Index`);
    let index = parseInt(indexField.value) || 0;
    indexField.value = index + 1;

    const container = document.getElementById(`${fieldType}Container`);

    const newFieldHTML = `
        <div class="row mb-2 align-items-center">
            <div class="col-md-4">
                <input type="text" name="${fieldType}[${index}][heading]" class="form-control" placeholder="Heading">
            </div>
            <div class="col-md-6">
                <textarea name="${fieldType}[${index}][paragraph]" class="form-control" placeholder="Paragraph"></textarea>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
            </div>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', newFieldHTML);
}

function removeElement(element) {
    element.closest('.row').remove();
}
</script>
@endsection
