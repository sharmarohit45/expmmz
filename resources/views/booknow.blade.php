@extends('Layout')
@section('main-content')
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Book Now</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Destinations</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Book Now</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl courses my-6 py-6 pb-0" id="destinations">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Book Now</h6>
                <h1 class="display-6 mb-4">Book Now</h1>
                <p>Book now to secure your spot on this extraordinary journey! Click the "Book Now" button to begin your
                    adventure with us. Our team is dedicated to providing you with a seamless and thrilling trekking
                    experience, from planning to guiding. Let’s make your Himalayan dream a reality!</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 my-6 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-center p-5">
                        <h1 class="mb-4">DETAILS</h1>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control border-0 @error('name') is-invalid @enderror" name="name"
                                            id="gname" placeholder="Name" value="{{ old('name') }}" />
                                        <label for="gname">Your Name</label>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email"
                                            class="form-control border-0 @error('email') is-invalid @enderror"
                                            name="email" id="gmail" placeholder="Email" value="{{ old('email') }}" />
                                        <label for="gmail">Your Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control border-0 @error('mobile_no') is-invalid @enderror"
                                            name="mobile_no" id="cname" placeholder="Mobile No"
                                            value="{{ old('mobile_no') }}" />
                                        <label for="cname">Mobile No.</label>
                                        @error('mobile_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text"
                                            class="form-control border-0 @error('trekk_name') is-invalid @enderror"
                                            name="trekk_name" id="cage" placeholder="Trekk Name"
                                            value="{{ old('trekk_name') }}" />
                                        <label for="cage">Trekk Name</label>
                                        @error('trekk_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 @error('address') is-invalid @enderror" name="address"
                                            placeholder="Enter Your Address" id="address" style="height:100px">{{ old('address') }}</textarea>
                                        <label for="address">Address</label>
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0" name="message" placeholder="Leave a message here" id="message"
                                            style="height:100px">{{ old('message') }}</textarea>
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
