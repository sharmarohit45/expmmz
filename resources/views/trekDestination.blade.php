@extends('Layout')

@section('main-content')
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Trek Destination</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Trek Destination</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%">
            <h6 class="text-primary text-uppercase mb-2">Trekking Destinations</h6>
            <h1 class="display-6 mb-4">Popular Trekking Destinations</h1>
            <p>Discover the allure of nature's most breathtaking landscapes, where every trail tells a story. These popular trekking destinations have been shaped by the forces of nature and time, offering a perfect blend of adventure, serenity, and cultural richness. Whether you're seeking a peaceful escape or an adrenaline-filled journey, these trails promise an unforgettable experience. Embrace the wilderness, challenge yourself, and immerse in the natural beauty that these treks have to offer.</p>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($data as $trek)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">Price On Request</div>
                        <h5 class="mb-3">{{ $trek->trek_heading }}</h5>
                        <p>{{ $trek->about_trek }}</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $trek->duration }}</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        @if (!empty($trek->image_paths) && isset($trek->image_paths[0]) && File::exists(public_path($trek->image_paths[0])))
                        <img class="img-fluid" src="{{ asset($trek->image_paths[0]) }}" alt="Trek Image">
                        @else
                        <img class="img-fluid" src="{{ asset('images/default-image.jpg') }}" alt="Default Image">
                        @endif
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="{{ route('trek.showdata', $trek->id) }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-center p-5">
                    <h1 class="mb-4">Make Appointment</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="gname" placeholder="Your Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="gmail" placeholder="Your Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cname" placeholder="Course Type">
                                    <label for="cname">Course Type</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cage" placeholder="Car Type">
                                    <label for="cage">Car Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection