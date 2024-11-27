@extends('Layout')
@section('main-content')


<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/banner/banner2.png" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-3 animated slideInDown">EXPLOREMOZO</h1>
                                <h3 class="display-6  text-light mb-5 animated slideInDown">HIKE THE PEAKS</h3>
                                <a href='#destinations' class="btn btn-primary py-sm-3 px-sm-5">Explore More</a>
                                <a href='#about' class="btn btn-light py-sm-3 px-sm-5 ms-3">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/banner/banner.png" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-3 animated slideInDown">EXPLOREMOZO</h1>
                                <h3 class="display-6  text-light mb-5 animated slideInDown">HIKE THE PEAKS</h3>
                                <a href='#destinations' class="btn btn-primary py-sm-3 px-sm-5">Explore More</a>
                                <a href='#about' class="btn btn-light py-sm-3 px-sm-5 ms-3">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Scenic Trails</h5>
                            <span>Explore breathtaking views and scenic trails tailored for every trekker.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Experienced Guides</h5>
                            <span>Guided treks with experienced guides to ensure a safe and enriching experience.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square bg-primary">
                            <i class="fa fa-file-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5>Comprehensive Maps</h5>
                            <span>Detailed maps and routes for every adventure to help you navigate with ease.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/Gallery/gallery (5).jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/Gallery/gallery (4).jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                    <h1 class="display-6 mb-4">EXPLOREMOZO</h1>
                    <p>At EXPLOREMOZO, we believe that every trek is more than just a journey; it’s a chance to reconnect with nature, push your limits, and discover the hidden wonders of the world. Our team of expert guides and outdoor enthusiasts are passionate about creating unforgettable trekking experiences that cater to adventurers of all levels.</p>
                    <p class="mb-4">From the serene beauty of remote valleys to the challenging climbs of majestic peaks, we offer a diverse range of trekking routes that showcase the breathtaking landscapes and rich cultures of the regions we explore. Whether you're a seasoned trekker or a first-time hiker, we provide personalized itineraries and professional support to ensure your adventure is safe, enjoyable, and memorable.</p>
                    <div class="row g-2 mb-4 pb-2">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Fully Licensed
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Online Tracking
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Afordable Fee
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Best Trainers
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <a class="btn btn-primary py-3 px-5" href="/destination">Explore More</a>
                        </div>
                        <div class="col-sm-6">
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+7579060903">
                                <span class="flex-shrink-0 btn-square bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </span>
                                <span class="px-3">7579060903</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Courses Start -->
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
                                    <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                    <label for="cname">Courses Type</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
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
<!-- Courses End -->


<!-- Features Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                <h1 class="display-6 mb-4">Unforgettable Trekking Adventures</h1>
                <p class="mb-5">Experience breathtaking landscapes, immersive nature, and thrilling challenges with our expertly guided trekking adventures. Whether you're a seasoned trekker or a first-time explorer, our treks offer a perfect blend of adventure and safety.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Expert Guides</h5>
                        </div>
                        <span>Our certified guides bring local expertise and years of trekking experience to ensure a safe and enriching journey.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Stunning Routes</h5>
                        </div>
                        <span>Discover diverse trails, from lush forests and serene lakes to rugged mountains and awe-inspiring vistas.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Comfortable Lodging</h5>
                        </div>
                        <span>Enjoy comfortable accommodations in scenic spots, with all essential amenities to relax and rejuvenate after a day’s trek.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <h5 class="mb-0">Customizable Packages</h5>
                        </div>
                        <span>Choose from a range of packages tailored to different skill levels and preferences, or create a custom adventure just for you.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/TREKKING_PLACE/Pindari-Glacier-Trek-2.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="img/TREKKING_PLACE/Pindari-Glacier-Trek.jpg" alt="" style="width: 200px; height: 200px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<div class="container-xxl courses my-6 py-6 pb-5" id="destinations">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <a href='/Book-Now'><video src="img/Travel_post.mp4" autoPlay loop muted playsInline style="height: 600px; width: 100%; "></video></a>
        </div>
    </div>
</div>
<!-- Team Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
            <h1 class="display-6 mb-4">We Have Great Experience Of Driving</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Full Name</h5>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Full Name</h5>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Full Name</h5>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social text-center">
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Full Name</h5>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
            <h1 class="display-6 mb-4">What Our Clients Say!</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    @foreach($reviews as $review)
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <!-- Check if the review has an image, if not use a placeholder -->
                            <img class="img-fluid rounded-circle mx-auto" src="{{ asset($review->image_name ?: 'img/default-testimonial.jpg') }}" alt="{{ $review->name ?? 'Review Image' }}">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">{!! nl2br(e($review->review)) !!}</p> <!-- Review content with proper escaping -->
                        <hr class="w-25 mx-auto">
                        <h5>{{ $review->name ?? 'Anonymous' }}</h5> <!-- Fallback name if empty -->
                        <span>{{ $review->profession ?? 'Profession not provided' }}</span> <!-- Fallback profession -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Testimonial End -->

@endsection