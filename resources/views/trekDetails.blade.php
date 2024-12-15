@extends('Layout')

@section('main-content')
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{ $trek->trek_heading }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Destinations</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{ $trek->trek_heading }}</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">{{ $trek->trek_heading }}</h6>
                <h1 class="display-6 mb-4">{{ $trek->trek_heading }}</h1>
                <p class="mb-5">{{ $trek->about_trek }}</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Location</h5>
                        </div>
                        <span>{{ $trek->location }}</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Altitude</h5>
                        </div>
                        <span>{{ $trek->altitude }}</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Difficulty</h5>
                        </div>
                        <span>{{ $trek->difficulty }}</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Best Time to Visit</h5>
                        </div>
                        <span>{{ $trek->best_time_to_visit }}</span>
                    </div>
                </div>

                <h6 class="text-primary text-uppercase mb-2 mt-5">Trek Details</h6>
                <p class="mb-5">The {{ $trek->trek_heading }} Trek is a rewarding journey with the following details:</p>
                <ul class="list-unstyled">
                    <li><strong>Base Camp:</strong> {{ $trek->base_camp }}</li>
                    <li><strong>Duration:</strong> {{ $trek->duration }}</li>
                    <li><strong>Route:</strong> {{ implode(' → ', $trek->route ?? []) }}</li>
                </ul>

                <!-- Accordion Section -->

                @if (!empty($trek->Itnery_tips) && is_array($trek->Itnery_tips))
                <div class="accordion" id="itineraryAccordion">
                    @foreach ($trek->Itnery_tips as $index => $day)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                Day {{ $index + 1 }}
                            </button>
                        </h2>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#itineraryAccordion">
                            <div class="accordion-body">
                            <b>{{ $day['heading'] ?? 'Untitled' }} : </b> {{ $day['paragraph'] ?? 'No details provided for this day.' }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p>No itinerary available for this trek.</p>
                @endif



                @if (!empty($trek->key_attraction) && is_array($trek->key_attraction))
                <h6 class="text-primary text-uppercase mb-2 mt-5">Key Attractions</h6>
                <p class="mb-5">Highlights of the trek include:</p>
                <ul class="list-unstyled">
                    @foreach ($trek->key_attraction as $attraction)
                    <li><strong>{{ $attraction['heading'] ?? 'Unnamed' }}:</strong> {{ $attraction['paragraph'] ?? 'No description provided' }}</li>
                    @endforeach
                </ul>
                @endif


                @if (!empty($trek->preparation_tips) && is_array($trek->preparation_tips))
                <h6 class="text-primary text-uppercase mb-2 mt-5">Preparation and Tips</h6>
                <ul class="list-unstyled">
                    @foreach ($trek->preparation_tips as $tip)
                    <li><strong>{{ $tip['heading'] ?? 'Untitled' }}:</strong> {{ $tip['paragraph'] ?? 'No tips provided' }}</li>
                    @endforeach
                </ul>
                @endif

                @if (!empty($trek->how_to_reach) && is_array($trek->how_to_reach))
                <h6 class="text-primary text-uppercase mb-2 mt-5">How to Reach</h6>
                <ul class="list-unstyled">
                    @foreach ($trek->how_to_reach as $method)
                    <li><strong>{{ $method['heading'] ?? 'Transport Method' }}:</strong> {{ $method['paragraph'] ?? 'Details not available' }}</li>
                    @endforeach
                </ul>
                @endif

                <div class="row mt-3 gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <a href="/Book-Now"><button class="btn btn-primary py-sm-3 px-sm-5">Book Now</button></a>
                    </div>
                </div>
            </div>

            <!-- Trek Images -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height:400px;">
                    @if (!empty($trek->image_paths) && is_array($trek->image_paths))
                    <img class="position-absolute w-100 h-100" src="{{ asset($trek->image_paths[0]) }}" alt="{{ $trek->trek_heading }}" style="object-fit: cover"/>
                    @else
                    <img class="position-absolute w-100 h-100" src="{{ asset('images/default-image.jpg') }}" alt="Default Image" style="object-fit: cover"/>
                    @endif
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="{{ asset($trek->image_paths[1] ?? 'images/default-image.jpg') }}" alt="Mountain View" style="width: 200px; height: 200px" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
