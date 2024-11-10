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
                        @foreach($trek->route as $route)
                            <div class="input-group mb-2">
                                <input type="text" name="route[]" class="form-control" value="{{ old('route[]', $route) }}" placeholder="Enter Route">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('route')">Add Route</button>
                </div>

                <!-- Dynamic fields for Key Attractions -->
                <label class="form-label">Key Attractions</label>
                <div id="keyAttractionContainer">
                    @foreach($trek->key_attraction as $attraction)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="key_attraction[][heading]" class="form-control" value="{{ old('key_attraction[][heading]', $attraction['heading'] ?? '') }}" placeholder="Attraction Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="key_attraction[][paragraph]" class="form-control" placeholder="Details about attraction">{{ old('key_attraction[][paragraph]', $attraction['paragraph'] ?? '') }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="btn btn-secondary" onclick="addDynamicField('key_attraction')">Add Key Attraction</button>

                <!-- Dynamic fields for Preparation Tips -->
                <label class="form-label">Preparation Tips</label>
                <div id="preparationTipsContainer">
                    @foreach($trek->preparation_tips as $tip)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="preparation_tips[][heading]" class="form-control" value="{{ old('preparation_tips[][heading]', $tip['heading'] ?? '') }}" placeholder="Tip Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="preparation_tips[][paragraph]" class="form-control" placeholder="Details about tip">{{ old('preparation_tips[][paragraph]', $tip['paragraph'] ?? '') }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="btn btn-secondary" onclick="addDynamicField('preparation_tips')">Add Preparation Tip</button>

                <!-- Dynamic fields for How to Reach -->
                <label class="form-label">How to Reach</label>
                <div id="howToReachContainer">
                    @foreach($trek->how_to_reach as $reach)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="how_to_reach[][heading]" class="form-control" value="{{ old('how_to_reach[][heading]', $reach['heading'] ?? '') }}" placeholder="Route Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="how_to_reach[][paragraph]" class="form-control" placeholder="Details about how to reach">{{ old('how_to_reach[][paragraph]', $reach['paragraph'] ?? '') }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="btn btn-secondary" onclick="addDynamicField('how_to_reach')">Add How to Reach</button>

                <!-- Images -->
                <div class="mb-3">
                    <label class="form-label">Images</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    <small class="form-text text-muted">Upload images for the trek.</small>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Trek</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Function to add dynamic fields to containers
    function addDynamicField(fieldType) {
        const container = document.getElementById(fieldType + 'Container');
        let newInput;

        // Check if adding Key Attractions, Preparation Tips or How to Reach
        if (fieldType === 'key_attraction' || fieldType === 'preparation_tips' || fieldType === 'how_to_reach') {
            newInput = document.createElement('div');
            newInput.classList.add('row', 'mb-2', 'align-items-center');
            newInput.innerHTML = `
                <div class="col-md-4">
                    <input type="text" name="${fieldType}[][heading]" class="form-control" placeholder="Heading">
                </div>
                <div class="col-md-6">
                    <textarea name="${fieldType}[][paragraph]" class="form-control" placeholder="Paragraph"></textarea>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                </div>`;
            container.appendChild(newInput);
        }
    }

    // Function to remove dynamic fields
    function removeElement(button) {
        button.closest('.row').remove();
    }
</script>
@endsection
