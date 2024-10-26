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
                    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trek_heading">Trek Heading</label>
                                <input type="text" name="trek_heading" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="about_trek">About Trek</label>
                                <textarea name="about_trek" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="location">Location</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="altitude">Altitude</label>
                                <input type="text" name="altitude" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="difficulty">Difficulty</label>
                                <input type="text" name="difficulty" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="best_time_to_visit">Best Time to Visit</label>
                                <input type="text" name="best_time_to_visit" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="base_camp">Base Camp</label>
                                <input type="text" name="base_camp" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" class="form-control" required>
                            </div>
                        </div>

                        <!-- Route (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="route">Route</label>
                                <div id="route-container">
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
                                    <input type="text" name="preparation_tips[heading][]" class="form-control mb-2" placeholder="Heading">
                                    <textarea name="preparation_tips[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addTip()">Add Tip</button>
                            </div>
                        </div>

                        <!-- HOW TO REACH (Dynamic Input) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="how_to_reach">HOW TO REACH</label>
                                <div id="how-to-reach-container">
                                    <input type="text" name="how_to_reach[heading][]" class="form-control mb-2" placeholder="Heading">
                                    <textarea name="how_to_reach[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                                </div>
                                <button type="button" class="btn btn-secondary" onclick="addHowToReach()">Add How to Reach</button>
                            </div>
                        </div>

                        <!-- Images (Multiple) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="images">Images</label>
                                <input type="file" name="images[]" class="form-control" multiple>
                            </div>
                        </div>

                        <!-- Trek Times (Season) -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="trek_times_season">Trek Times (Season)</label>
                                <select name="trek_times_season" class="form-control" required>
                                    <option value="Winter">Winter</option>
                                    <option value="Summer">Summer</option>
                                </select>
                            </div>

                            <!-- Trek Times (Months) -->
                            <div class="col-md-6">
                                <label for="trek_times_months">Trek Times (Months)</label>
                                <select name="trek_times_months" class="form-control" required>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            // Dynamic route input
            function addRoute() {
                const container = document.getElementById('route-container');
                const div = document.createElement('div');
                div.className = 'input-group mb-2';
                div.innerHTML = `
                    <input type="text" name="route[]" class="form-control" placeholder="Enter Route">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" onclick="removeElement(this)">Remove</button>
                    </div>
                `;
                container.appendChild(div);
            }

            // Dynamic key attraction
            function addAttraction() {
                const container = document.getElementById('key-attraction-container');
                const div = document.createElement('div');
                div.className = 'mb-2';
                div.innerHTML = `
                    <input type="text" name="key_attraction[heading][]" class="form-control mb-2" placeholder="Heading">
                    <textarea name="key_attraction[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                    <button class="btn btn-danger mb-2" type="button" onclick="removeElement(this)">Remove</button>
                `;
                container.appendChild(div);
            }

            // Dynamic preparation and tips
            function addTip() {
                const container = document.getElementById('preparation-tips-container');
                const div = document.createElement('div');
                div.className = 'mb-2';
                div.innerHTML = `
                    <input type="text" name="preparation_tips[heading][]" class="form-control mb-2" placeholder="Heading">
                    <textarea name="preparation_tips[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                    <button class="btn btn-danger mb-2" type="button" onclick="removeElement(this)">Remove</button>
                `;
                container.appendChild(div);
            }

            // Dynamic how to reach
            function addHowToReach() {
                const container = document.getElementById('how-to-reach-container');
                const div = document.createElement('div');
                div.className = 'mb-2';
                div.innerHTML = `
                    <input type="text" name="how_to_reach[heading][]" class="form-control mb-2" placeholder="Heading">
                    <textarea name="how_to_reach[paragraph][]" class="form-control mb-2" rows="2" placeholder="Paragraph"></textarea>
                    <button class="btn btn-danger mb-2" type="button" onclick="removeElement(this)">Remove</button>
                `;
                container.appendChild(div);
            }

            // Remove dynamic element
            function removeElement(button) {
                button.closest('.mb-2').remove();
            }
        </script>
    </div>
</div>
@endsection
