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
                    <form action="{{ route('treks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Trek Heading -->
                        <div class="mb-3">
                            <label class="form-label">Trek Heading</label>
                            <input type="text" name="trek_heading" class="form-control">
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <!-- About Trek -->
                        <div class="mb-3">
                            <label class="form-label">About Trek</label>
                            <textarea name="about_trek" class="form-control"></textarea>
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <!-- Best Time to Visit -->
                        <div class="mb-3">
                            <label class="form-label">Best Time to Visit</label>
                            <input type="text" name="best_time_to_visit" class="form-control">
                        </div>

                        <!-- Base Camp -->
                        <div class="mb-3">
                            <label class="form-label">Base Camp</label>
                            <input type="text" name="base_camp" class="form-control">
                        </div>

                        <!-- Duration -->
                        <div class="mb-3">
                            <label class="form-label">Duration</label>
                            <input type="text" name="duration" class="form-control">
                        </div>
                        <!-- Altitude -->
                        <div class="mb-3">
                            <label class="form-label">Altitude</label>
                            <input type="text" name="altitude" class="form-control">
                        </div>
                         
                        <div class="mb-3">
                            <label class="form-label">Trek Details</label>
                            <input type="text" name="trekDetails" class="form-control">
                        </div>


                        <!-- Difficulty -->
                        <div class="mb-3">
                            <label class="form-label">Difficulty</label>
                            <input type="text" name="difficulty" class="form-control">
                        </div>

                        <!-- Dynamic fields for Route -->
                        <div class="mb-3">
                            <label class="form-label">Route</label>
                            <div id="routeContainer">
                                <div class="input-group mb-2">
                                    <input type="text" name="route[]" class="form-control" placeholder="Enter Route">
                                    <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="addRoute()">Add Route</button>
                        </div>

                        <!-- Dynamic fields for Key Attractions -->
                        <div id="keyAttractionContainer">
                            <div class="input-group mb-2">
                                <input type="text" name="key_attraction[0][heading]" class="form-control" placeholder="Attraction Heading">
                                <textarea name="key_attraction[0][paragraph]" class="form-control" placeholder="Details about attraction"></textarea>
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="addKeyAttraction()">Add Key Attraction</button>

                        <!-- Preparation Tips Section -->
                        <h4>Itnery</h4>
                        <div id="itneryTipsContainer">
                            <div class="input-group mb-2">
                                <input type="text" name="Itnery_tips[0][heading]" class="form-control" placeholder="Tip Heading">
                                <textarea name="Itnery_tips[0][paragraph]" class="form-control" placeholder="Details about tip"></textarea>
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" onclick="addItnery()">Add Itenery Tip</button>
                       
                        <h4>Preparation Tips</h4>
                        <div id="preparationTipsContainer">
                            <div class="input-group mb-2">
                                <input type="text" name="preparation_tips[0][heading]" class="form-control" placeholder="Tip Heading">
                                <textarea name="preparation_tips[0][paragraph]" class="form-control" placeholder="Details about tip"></textarea>
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" onclick="addPreparationTip()">Add Preparation Tip</button>

                        <!-- How to Reach Section -->
                        <h4>How to Reach</h4>
                        <div id="howToReachContainer">
                            <div class="input-group mb-2">
                                <input type="text" name="how_to_reach[0][heading]" class="form-control" placeholder="Method Heading">
                                <textarea name="how_to_reach[0][paragraph]" class="form-control" placeholder="Details about reaching method"></textarea>
                                <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" onclick="addHowToReach()">Add How to Reach</button>

                        <!-- Upload Images -->
                        <div class="mb-3">
                            <label class="form-label">Images</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                        </div>

                        <!-- Select Trek Times Season -->
                        <div class="mb-3">
                            <label class="form-label">Trek Times Season</label>
                            <select name="trek_times_season" class="form-select">
                                <option value="winter">Winter</option>
                                <option value="summer">Summer</option>
                            </select>
                        </div>

                        <!-- Select Trek Times Month -->
                        <div class="mb-3">
                            <label class="form-label">Trek Times Month</label>
                            <input type="month" name="trek_times_months" class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Create Trek</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let keyAttractionIndex = 1;
    let preparationTipsIndex = 1;
    let ItneryIndex = 1;
    let howToReachIndex = 1;

    function addRoute() {
        const container = document.getElementById('routeContainer');
        const newRoute = `<div class="input-group mb-2">
                            <input type="text" name="route[]" class="form-control" placeholder="Enter Route">
                            <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
                          </div>`;
        container.insertAdjacentHTML('beforeend', newRoute);
    }

    function addKeyAttraction() {
        const container = document.getElementById('keyAttractionContainer');
        const newAttraction = `
    <div class="input-group mb-2">
        <input type="text" name="key_attraction[${keyAttractionIndex}][heading]" class="form-control" placeholder="Attraction Heading">
        <textarea name="key_attraction[${keyAttractionIndex}][paragraph]" class="form-control" placeholder="Details about attraction"></textarea>
        <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
    </div>`;
        container.insertAdjacentHTML('beforeend', newAttraction);
        keyAttractionIndex++;
    }

    function addPreparationTip() {
        const container = document.getElementById('preparationTipsContainer');
        const newTip = `
    <div class="input-group mb-2">
        <input type="text" name="preparation_tips[${preparationTipsIndex}][heading]" class="form-control" placeholder="Tip Heading">
        <textarea name="preparation_tips[${preparationTipsIndex}][paragraph]" class="form-control" placeholder="Details about tip"></textarea>
        <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
    </div>`;
        container.insertAdjacentHTML('beforeend', newTip);
        preparationTipsIndex++;
    }
    function addItnery() {
        const container = document.getElementById('itneryTipsContainer');
        const newTip = `
    <div class="input-group mb-2">
        <input type="text" name="Itnery_tips[${ItneryIndex}][heading]" class="form-control" placeholder="Tip Heading">
        <textarea name="Itnery_tips[${ItneryIndex}][paragraph]" class="form-control" placeholder="Details about tip"></textarea>
        <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
    </div>`;
        container.insertAdjacentHTML('beforeend', newTip);
        ItneryIndex++;
    }

    function addHowToReach() {
        const container = document.getElementById('howToReachContainer');
        const newMethod = `
    <div class="input-group mb-2">
        <input type="text" name="how_to_reach[${howToReachIndex}][heading]" class="form-control" placeholder="Method Heading">
        <textarea name="how_to_reach[${howToReachIndex}][paragraph]" class="form-control" placeholder="Details about reaching method"></textarea>
        <button type="button" class="btn btn-danger" onclick="removeElement(this)">Remove</button>
    </div>`;
        container.insertAdjacentHTML('beforeend', newMethod);
        howToReachIndex++;
    }

    function removeElement(button) {
        button.closest('.input-group').remove();
    }
</script>
@endsection