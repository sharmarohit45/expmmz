@extends('Layout')
@section('main-content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


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
                            <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:7579060903">
                              <span class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-phone-alt text-white"></i>
                              </span>
                              <span class="px-3">+91 7579060903</span>
                            </a>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection