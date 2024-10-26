@extends('homepage')
@section('main-section')
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Learn To Drive With Confidence</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top Priority</h1>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Courses</a>
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
                            <i class="fa fa-map text-white"></i>
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
<div className="container-xxl py-6">
    <div className="container">
        <div className="row g-5">
            <div className="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div className="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height:400px">
                    <img className="position-absolute w-100 h-100" src="img/Gallery/gallery (5).jpg" alt="" style="object-fit:cover;"/>
                    <img className="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/Gallery/gallery (4).jpg" alt="" style="width: 200px; height: 200px" />
                </div>
            </div>
            <div className="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div className="h-100">
                    <h6 className="text-primary text-uppercase mb-2">About Us</h6>
                    <h1 className="display-6 mb-4">EXPLOREMOZO</h1>
                    <p>At EXPLOREMOZO, we believe that every trek is more than just a journey; it’s a chance to reconnect with nature, push your limits, and discover the hidden wonders of the world. Our team of expert guides and outdoor enthusiasts are passionate about creating unforgettable trekking experiences that cater to adventurers of all levels.</p>
                    <p className="mb-4">From the serene beauty of remote valleys to the challenging climbs of majestic peaks, we offer a diverse range of trekking routes that showcase the breathtaking landscapes and rich cultures of the regions we explore. Whether you're a seasoned trekker or a first-time hiker, we provide personalized itineraries and professional support to ensure your adventure is safe, enjoyable, and memorable.</p>
                    <div className="row g-2 mb-4 pb-2">
                        <div className="col-sm-6">
                            <i className="fa fa-check text-primary me-2"></i>Fully Licensed
                        </div>
                        <div className="col-sm-6">
                            <i className="fa fa-check text-primary me-2"></i>Online Tracking
                        </div>
                        <div className="col-sm-6">
                            <i className="fa fa-check text-primary me-2"></i>Affordable Pricing
                        </div>
                        <div className="col-sm-6">
                            <i className="fa fa-check text-primary me-2"></i>Expert Guides
                        </div>
                    </div>
                    <div className="row g-4">
                        <div className="col-sm-6">
                            <Link className="btn btn-primary py-3 px-5" to="/destination">Explore More</Link>
                        </div>
                        <div className="col-sm-6">
                            <a className="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:7579060903">
                                <span className="flex-shrink-0 btn-square bg-primary">
                                    <i className="fa fa-phone-alt text-white"></i>
                                </span>
                                <span className="px-3">+91 7579060903</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection