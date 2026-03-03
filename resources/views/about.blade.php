@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative w-100" style="background: linear-gradient(rgba(34,34,34,0.6),rgba(34,34,34,0.6)), url('{{ asset('images/enquiry.webp')}}') center center / cover no-repeat; min-height: 300px;">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 300px;">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bold mb-3">About SSP Tour & Travel</h1>
                <p class="lead">Your trusted partner for unforgettable travel experiences across India</p>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
    @section('meta')
        <title>About SSP Tourandtravels - Trusted India Travel Agency</title>
        <meta name="description" content="Learn about SSP Tourandtravels, your trusted partner for unforgettable travel experiences across India. 5+ years of expertise, personalized service, and 24/7 support.">
        <meta name="keywords" content="about SSP Tourandtravels, India travel agency, trusted partner, experience, support">
        <link rel="canonical" href="{{ url()->current() }}">
    @endsection
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Who We Are</h2>
                    <p class="text-secondary mb-3">
                        SSP Tour & Travel is a leading travel agency dedicated to creating exceptional travel experiences for our clients. With over 5 years of experience in the tourism industry, we have successfully organized thousands of tours across India.
                    </p>
                    <p class="text-secondary mb-3">
                        Our team of travel experts is passionate about showcasing the beauty, culture, and diversity of India. We specialize in customized tour packages, luxury travel, adventure trips, honeymoon packages, and pilgrimage tours.
                    </p>
                    <p class="text-secondary">
                        We believe in providing personalized service, attention to detail, and creating memories that last a lifetime. Your satisfaction is our top priority.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/img1.png')}}" 
                         alt="Travel" 
                         class="w-100" 
                         style="height:400px;">
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="fw-bold mb-4 text-center">Why Choose SSP Tour & Travel?</h2>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-award-fill text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="fw-bold mb-2">5+ Years Experience</h5>
                        <p class="text-secondary">Trusted by thousands of travelers with proven track record in the industry</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-headset text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="fw-bold mb-2">24/7 Support</h5>
                        <p class="text-secondary">Round-the-clock customer support for all your travel needs</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="text-center p-4">
                        <div class="mb-3">
                            <i class="bi bi-shield-check text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Best Price Guarantee</h5>
                        <p class="text-secondary">Competitive pricing with no hidden charges and best value packages</p>
                    </div>
                </div>
            </div>

            <!-- Our Services -->
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold mb-4 text-center">Our Services</h2>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-taxi-front text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">Cab Service</div>
                        <div class="small text-secondary mt-2">Reliable cab service for local and outstation travel, with a variety of cabs and professional drivers.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-geo-alt text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">Custom Routes</div>
                        <div class="small text-secondary mt-2">Book vehicles for your preferred routes and destinations across India.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-person-check text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">Professional Drivers</div>
                        <div class="small text-secondary mt-2">Experienced, courteous drivers for a safe and comfortable journey.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-telephone-inbound text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">24/7 Cab Booking</div>
                        <div class="small text-secondary mt-2">Book cabs anytime, anywhere for local or outstation travel with instant confirmation.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-arrows-move text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">One Way & Round Trip</div>
                        <div class="small text-secondary mt-2">Convenient one-way or round-trip bookings for intercity and local travel.</div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-4">
                    <div class="bg-light rounded-3 shadow-sm p-3 text-center h-100">
                        <i class="bi bi-shield-lock text-primary fs-2 mb-2"></i>
                        <div class="fw-semibold">Sanitized & Safe Vehicles</div>
                        <div class="small text-secondary mt-2">Regularly sanitized vehicles with safety protocols for your peace of mind.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
