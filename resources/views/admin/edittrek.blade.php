@extends('admin.adminHeader')
@section('admin-main')
<div id="page-content-wrapper">
    <div class="container-fluid">
        <h2 class="mt-4">Edit Trek: {{ $trek->trek_heading }}</h2>

        <div class="card bg-white text-dark p-5">
            <form action="{{ route('treks.update', $trek->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
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

                <div class="col-md-6">
                    <label for="trekDetails">Trek Details</label>
                    <input type="text" name="trekDetails" class="form-control" value="{{ old('trekDetails', $trek->trekDetails) }}" required>
                </div>

                <!-- Difficulty -->
                <div class="mb-3">
                    <label class="form-label">Difficulty</label>
                    <input type="text" name="difficulty" class="form-control" value="{{ old('difficulty', $trek->difficulty) }}">
                </div>

                <!-- Dynamic fields for Route
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
                </div> -->

                <!-- Route (Dynamic Input) -->
                <div class="mb-3">
                    <label class="form-label">Route</label>
                    <div id="routeContainer">
                        <!-- Pre-populate existing routes -->
                        @foreach($trek->route as $index => $route)
                        <div class="input-group mb-2" id="route-{{ $index }}">
                            <input type="text" name="route[]" class="form-control" value="{{ $route }}" placeholder="Enter Route">
                            <button type="button" class="btn btn-danger" onclick="removeRouteField('route-{{ $index }}')">Remove</button>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addRouteField()">Add Route</button>
                </div>



                <div class="mb-3">
                    <label class="form-label">Itnery</label>
                    <div id="Itnery_tipsContainer">
                        @foreach($trek->Itnery_tips as $index => $itnery)
                        <div class="row mb-2 align-items-center">
                            <div class="col-md-4">
                                <input type="text" name="Itnery_tips[{{ $index }}][heading]" class="form-control" value="{{ old('Itnery_tips.' . $index . '.heading', $itnery['heading']) }}" placeholder="Attraction Heading">
                            </div>
                            <div class="col-md-6">
                                <textarea name="Itnery_tips[{{ $index }}][paragraph]" class="form-control" placeholder="Details about itnery">{{ old('Itnery_tips.' . $index . '.paragraph', $itnery['paragraph']) }}</textarea>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="addDynamicField('Itnery_tips')">Add Itnery</button>
                    <input type="hidden" id="Itnery_tipsIndex" value="{{ count($trek->Itnery_tips) }}">
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
                <div class="form-group">
                    <label for="images">Trek Images</label>
                    <div class="preview-images-container mb-3">
                        <h4>Existing Images:</h4>
                        @if (!empty($trek->image_paths) && is_array($trek->image_paths))
                        @foreach ($trek->image_paths as $path)
                        <div class="image-preview-wrapper" style="display: inline-block; margin: 10px; text-align: center;">
                            <img src="{{ asset($path) }}" alt="Trek Image" style="width: 150px; height: 150px; object-fit: cover;">
                            <p>{{ $path }}</p>
                            <!-- Optional delete option (handled on the backend) -->
                            <input type="checkbox" name="delete_images[]" value="{{ $path }}"> Delete
                        </div>
                        @endforeach
                        @else
                        <p>No existing images available.</p>
                        @endif
                    </div>

                    <h4>Upload New Images:</h4>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                    <small class="text-muted">You can upload multiple images. Allowed formats: jpg, jpeg, png, gif.</small>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update Trek</button>
            </form>
        </div>
    </div>
</div>

<script>
    function addRouteField() {
        const container = document.getElementById('routeContainer');

        // Create a unique ID for the new field
        const timestamp = new Date().getTime();
        const newFieldId = `route-${timestamp}`;

        // Add a new input field with a remove button
        const newField = `
        <div class="input-group mb-2" id="${newFieldId}">
            <input type="text" name="route[]" class="form-control" placeholder="Enter Route">
            <button type="button" class="btn btn-danger" onclick="removeRouteField('${newFieldId}')">Remove</button>
        </div>
    `;
        container.insertAdjacentHTML('beforeend', newField);
    }

    function removeRouteField(fieldId) {
        const field = document.getElementById(fieldId);
        if (field) {
            field.remove();
        }
    }

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

</script>
@endsection