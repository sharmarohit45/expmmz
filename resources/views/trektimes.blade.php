@extends('Layout')
@section('main-content')
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-3">
            <h6 class="text-primary text-uppercase mb-2">BEST TREKKING TIMES</h6>
            <h1 class="display-6 mb-4">Best Trekking Time</h1>
            <p>Discover the allure of nature's most breathtaking landscapes, where every trail tells a story.</p>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true"><b class='text-dark'>All</b></button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link" id="april-june-tab" data-bs-toggle="pill" data-bs-target="#april-june" type="button" role="tab" aria-controls="april-june" aria-selected="false"><b class='text-dark'>April to June</b></button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link" id="may-june-tab" data-bs-toggle="pill" data-bs-target="#may-june" type="button" role="tab" aria-controls="may-june" aria-selected="false"><b class='text-dark'>May to June</b></button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link" id="sep-oct-tab" data-bs-toggle="pill" data-bs-target="#sep-oct" type="button" role="tab" aria-controls="sep-oct" aria-selected="false"><b class='text-dark'>September to October</b></button>
            </li>
            <li class="nav-item me-3" role="presentation">
                <button class="nav-link" id="sep-nov-tab" data-bs-toggle="pill" data-bs-target="#sep-nov" type="button" role="tab" aria-controls="sep-nov" aria-selected="false"><b class='text-dark'>September to November</b></button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div className="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Pindari Glacier Trek</h5>
                                <p>Located in the Kumaon region of Uttarakhand, this trek takes you through lush forests, quaint villages, and offers stunning views of the Pindari Glacier.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>8 to 10 days (depending on the route and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/Pindari-Glacier-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Sunderdhunga Glacier Trek</h5>
                                <p>Known as the 'Valley of Beautiful Stones,' this trek leads to two glaciers, Maiktoli and Sukhram, offering challenging terrain and panoramic views.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>8 to 10 days (depending on the route and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (19).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/Sunderdhunga-Glacier-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Kanakata Pass</h5>
                                <p> This pass is part of a lesser-known trek in Uttarakhand, offering spectacular views of snow-capped peaks and serene landscapes.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>8 to 10 days (depending on the route and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (17).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/KanakataPass-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Dhakuri Top</h5>
                                <p> A popular trekking destination in the Kumaon region, Dhakuri Top provides breathtaking views of the surrounding peaks and valleys.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>2 to 4 days (depending on the itinerary)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (23).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/DhakuriTop">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Pankhu Top</h5>
                                <p> A relatively lesser-known trek offering scenic beauty, ideal for trekkers seeking solitude and natural beauty.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 to 4 days (depending on the route and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/PankhuTop">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Kafni Glacier Trek</h5>
                                <p>This trek leads to the Kafni Glacier, nestled in the Kumaon region, offering mesmerizing views of Nanda Kot and Nanda Bhanar peaks.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>7 to 8 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (10).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/Kafni-Glacier-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Ranthan Top</h5>
                                <p>This trek provides a blend of adventure and scenic beauty, with panoramic views of the surrounding mountains</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 to 4 days (depending on the route and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/RanthanTop">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Roopkund Trek</h5>
                                <p>One of the most popular treks in India, Roopkund is famous for its mysterious high-altitude glacial lake, also known as the 'Skeleton Lake.'</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>8 to 9 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/Roopkund-Ronti-Saddle-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Roopkund Ronti Saddle Trek</h5>
                                <p>An extension of the Roopkund trek, this challenging route takes you to the Ronti Saddle, offering even more breathtaking views.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>9 to 11 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/Roopkund-Ronti-Saddle-Trek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Nanda Devi Basecamp Trek</h5>
                                <p>This trek takes you close to the base of Nanda Devi, the second-highest peak in India, offering stunning vistas of the surrounding Himalayas.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i> 12 to 14 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (7).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/NandaDeviBasecampTrek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Pangarchulla Trek</h5>
                                <p>Known for its challenging climb and mesmerizing views, Pangarchulla Peak is a perfect trek for adventure enthusiasts.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i> 7 to 9 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery_pangarchulla.jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/PangarchullaTrek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Brahmatal Trekk</h5>
                                <p>A winter trek that offers spectacular views of Mount Trishul and Mount Nanda Ghunti, along with frozen lakes and snow-covered landscapes</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>6 to 8 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/Brahmatal_trek.jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/BrahmatalTrek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Kuari Pass</h5>
                                <p>This trek is famous for the "Lord Curzon Trail" and offers stunning views of the Himalayan peaks like Nanda Devi and Dronagiri.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>6 to 8 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/KuariPass">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Kedarkantha Trek</h5>
                                <p>A popular winter trek, Kedarkantha offers a beautiful snow trekking experience with views of the mighty Himalayas.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>6 to 8 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/KedarkanthaTrek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">PRICE ON REQUEST</div>
                                <h5 class="mb-3">Bagini Glacier Trek</h5>
                                <p>This trek takes you close to the base of Nanda Devi, the second-highest peak in India, offering stunning vistas of the surrounding Himalayas.</p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    {{-- {/* <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li> */} --}}
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>12 to 15 days (depending on the itinerary and pace)</li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="/img/Gallery/places/gallery (11).jpg" width='100%' alt="" />
                                <div class="courses-overlay">
                                    <Link class="btn btn-outline-primary border-2" to="/BaginiGlacierTrek">Read More</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="april-june" role="tabpanel" aria-labelledby="april-june-tab">
                <p>April to June is the perfect time for trekking in many regions. Experience the blooming flora and pleasant weather.</p>
                <!-- Add more content specific to 'April to June' here -->
            </div>
            <div class="tab-pane fade" id="may-june" role="tabpanel" aria-labelledby="may-june-tab">
                <p>May to June offers stunning views as the weather warms up. Ideal for adventurous treks.</p>
                <!-- Add more content specific to 'May to June' here -->
            </div>
            <div class="tab-pane fade" id="sep-oct" role="tabpanel" aria-labelledby="sep-oct-tab">
                <p>September to October showcases the fall colors, making it a picturesque trekking season.</p>
                <!-- Add more content specific to 'September to October' here -->
            </div>
            <div class="tab-pane fade" id="sep-nov" role="tabpanel" aria-labelledby="sep-nov-tab">
                <p>Enjoy the tranquility of trekking from September to November as the trails are less crowded.</p>
                <!-- Add more content specific to 'September to November' here -->
            </div>
        </div>
    </div>
</div>
@endsection
