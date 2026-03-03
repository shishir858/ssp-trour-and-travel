@extends('layout.app')

@section('meta')
    <title>SSP Tourandtravels - Cab Booking & India Tours</title>
    <meta name="description" content="Book cabs and discover incredible India with SSP Tourandtravels. Trusted partner for memorable journeys, luxury travel, and adventure tours.">
    <meta name="keywords" content="cab booking, India tours, SSP Tourandtravels, luxury travel, adventure, sightseeing, holiday packages">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
    <!-- Hero Slider Section -->
    <style>
    @media (max-width: 767.98px) {
        #heroSliderBg {
            background-image: linear-gradient(rgba(34,34,34,0.7),rgba(34,34,34,0.7)), url('{{ asset('images/banners/mob-banner2.png') }}') !important;
            background-size: cover !important;
            background-position: center center !important;
        }
        #heroSliderBg .row.g-0 {
            min-height: 345px !important;
        }
    }
    </style>
    <section id="heroSliderBg" class="hero-slider-clean position-relative w-100 py-5 py-md-6" style="background: linear-gradient(rgba(34,34,34,0.7),rgba(34,34,34,0.7)), url('{{ asset('images/banners/banner5.jpg') }}') center center / cover no-repeat; transition: background-image 0.7s;">
        <div class="container-fluid px-0">
            <div class="row g-0 align-items-center flex-column flex-lg-row" style="min-height:320px; min-height:480px;@media (min-width: 768px){min-height:480px;}">
                <!-- Left: Content -->
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start px-5 py-4 py-lg-0">
                    <!-- Desktop/Tablet Content -->
                    <div class="d-none d-md-block">
                        <h1 class="fw-bold text-white mb-3" style="font-size:2.5rem; text-shadow:0 2px 8px rgba(0,0,0,0.25);">Book Your Cab Anywhere in India</h1>
                        <p class="text-white mb-4" style="max-width: 480px; font-size:1.15rem; text-shadow:0 1px 6px rgba(0,0,0,0.18);">
                            Enjoy safe, comfortable, and affordable rides with SSP Tour &amp; Travel. Trusted by 1000+ travelers for city, outstation, and group journeys. 24x7 support, professional drivers, and a wide range of vehicles.
                        </p>
                        <ul class="list-unstyled text-white mb-4" style="font-size:1.08rem;">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Instant Booking &amp; Confirmation</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>All India Permit Vehicles</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-warning me-2"></i>Transparent Pricing, No Hidden Charges</li>
                        </ul>
                        <a href="#enquiryFormHero" class="btn btn-warning btn-lg rounded-pill px-4 fw-bold shadow">Enquire Now <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                    <!-- Mobile Content -->
                    <div class="d-block d-md-none">
                        <h1 class="fw-bold text-white mb-2" style="font-size:1.4rem; text-shadow:0 2px 8px rgba(0,0,0,0.25);">Book Your Cab Anywhere</h1>
                        <p class="text-white mb-2" style="font-size:1rem; text-shadow:0 1px 6px rgba(0,0,0,0.18);">
                            Safe, affordable rides across India.<br>
                            24x7 support, professional drivers.<br>
                            Instant booking, transparent pricing.<br>
                            Wide range of vehicles for every need.
                        </p>
                        <a href="#enquiryFormHero" class="btn btn-warning btn-sm rounded-pill px-3 fw-bold shadow">Enquire Now <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <!-- Right: Enquiry Form -->
                <div class="col-12 col-lg-6 d-none d-lg-flex justify-content-center align-items-center px-4 py-5 py-lg-0">
                    <div class="bg-white bg-opacity-95 rounded-4 shadow-lg p-4 w-100" style="max-width: 500px;">
                        <h4 class="fw-bold mb-3 text-dark">Quick Enquiry</h4>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        <form action="{{ route('cab-enquiry.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old('name') }}" required>
                                    @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Passenger</label>
                                    <input type="text" class="form-control" name="passenger" placeholder="Passenger" value="{{ old('passenger') }}">
                                    @error('passenger')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Picking Up Location</label>
                                    <input type="text" class="form-control" name="pickup_location" placeholder="Enter location" value="{{ old('pickup_location') }}" required>
                                    @error('pickup_location')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Dropping Off Location</label>
                                    <input type="text" class="form-control" name="drop_location" placeholder="Enter location" value="{{ old('drop_location') }}" required>
                                    @error('drop_location')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Cab Type</label>
                                    <select class="form-select" name="vehicle_type" required>
                                        <option value="">Select Cab Type</option>
                                        <option value="5 Seater" {{ old('vehicle_type') == '5 Seater' ? 'selected' : '' }}>5 Seater</option>
                                        <option value="Sedan" {{ old('vehicle_type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                                        <option value="SUV" {{ old('vehicle_type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                                        <option value="Tempo Traveler" {{ old('vehicle_type') == 'Tempo Traveler' ? 'selected' : '' }}>Tempo Traveler</option>
                                        <option value="Luxury" {{ old('vehicle_type') == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                                    </select>
                                    @error('vehicle_type')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Number</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                                    @error('phone')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Picking Up Date</label>
                                    <input type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                                    @error('date')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Pickup Time</label>
                                    <input type="time" class="form-control" name="pickup_time" value="{{ old('pickup_time') }}">
                                    @error('pickup_time')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                                    @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-warning btn-lg rounded-pill fw-bold shadow">BOOK NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Hero background slider images
    const heroSliderImages = [
        @json(asset('images/banners/banner1.jpg')),
        @json(asset('images/banners/banner2.webp')),
        @json(asset('images/banners/banner3.jpg'))
    ];
    let heroSliderIndex = 0;
    setInterval(() => {
        heroSliderIndex = (heroSliderIndex + 1) % heroSliderImages.length;
        const section = document.getElementById('heroSliderBg');
        if(section) {
            section.style.background = `linear-gradient(rgba(34,34,34,0.7),rgba(34,34,34,0.7)), url('${heroSliderImages[heroSliderIndex]}') center center / cover no-repeat`;
        }
    }, 3500);
    </script>

    <!-- Mobile Enquiry Form (visible only on mobile) -->
    <div class="d-block d-md-none px-2 mb-4">
        <div class="bg-white bg-opacity-95 rounded-4 shadow-lg p-4 w-100" style="max-width: 500px; margin:auto;">
            <h4 class="fw-bold mb-3 text-dark">Quick Enquiry</h4>
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('cab-enquiry.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old('name') }}" required>
                        @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Passenger</label>
                        <input type="text" class="form-control" name="passenger" placeholder="Passenger" value="{{ old('passenger') }}">
                        @error('passenger')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Picking Up Location</label>
                        <input type="text" class="form-control" name="pickup_location" placeholder="Enter location" value="{{ old('pickup_location') }}" required>
                        @error('pickup_location')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Dropping Off Location</label>
                        <input type="text" class="form-control" name="drop_location" placeholder="Enter location" value="{{ old('drop_location') }}" required>
                        @error('drop_location')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Cab Type</label>
                        <select class="form-select" name="vehicle_type" required>
                            <option value="">Select Cab Type</option>
                            <option value="5 Seater" {{ old('vehicle_type') == '5 Seater' ? 'selected' : '' }}>5 Seater</option>
                            <option value="Sedan" {{ old('vehicle_type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="SUV" {{ old('vehicle_type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                            <option value="Tempo Traveler" {{ old('vehicle_type') == 'Tempo Traveler' ? 'selected' : '' }}>Tempo Traveler</option>
                            <option value="Luxury" {{ old('vehicle_type') == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                        </select>
                        @error('vehicle_type')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                        @error('phone')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Picking Up Date</label>
                        <input type="date" class="form-control" name="date" value="{{ old('date') }}" required>
                        @error('date')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Pickup Time</label>
                        <input type="time" class="form-control" name="pickup_time" value="{{ old('pickup_time') }}">
                        @error('pickup_time')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                        @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-warning btn-lg rounded-pill fw-bold shadow">BOOK NOW</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- About Section -->
    <section class="about-section py-5" style="background: #ffffff;">
        <div class="container">
            <div class="row align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 col-12 mt-4 mt-md-0">
                    <h2 class="fw-bold mb-3" style="font-size:2.2rem;">Your Trusted Cab Partner Across India</h2>
                    <p class="mb-3 text-secondary" style="max-width: 500px;">SSP Tour &amp; Travel offers reliable cab and vehicle rental services for all your travel needs. Enjoy safe, comfortable, and affordable rides with our professional drivers and well-maintained fleet.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <span class="display-5 fw-bold text-primary">7+</span>
                        </div>
                        <div>
                            <div class="fw-bold">Years</div>
                            <div class="text-secondary small">of Experience</div>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-6 col-sm-4">
                            <div class="bg-white rounded-3 shadow-sm p-3 text-center h-100">
                                <i class="bi bi-car-front text-primary fs-3 mb-2"></i>
                                <div class="fw-semibold">Cab<br>Booking</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="bg-white rounded-3 shadow-sm p-3 text-center h-100">
                                <i class="bi bi-signpost-2 text-primary fs-3 mb-2"></i>
                                <div class="fw-semibold">Popular<br>Routes</div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="bg-white rounded-3 shadow-sm p-3 text-center h-100">
                                <i class="bi bi-people text-primary fs-3 mb-2"></i>
                                <div class="fw-semibold">Group<br>Travel</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <span class="fw-bold text-success">Excellent!</span>
                        <span class="text-secondary small">Trusted by 1000+ happy travelers across India</span>
                        <i class="bi bi-patch-check-fill text-success ms-2"></i>
                    </div>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-center mb-4 mb-md-0">
                    <!-- Collage for large screens -->
                    <div class="d-none d-md-block position-relative">
                        <img src="{{ asset('images/cab.jpg') }}" alt="Cab" class="w-100 h-100">
                    </div>
                    <!-- Only one image for mobile -->
                    <div class="d-md-none w-100 d-flex flex-column align-items-center">
                        <img src="{{ asset('images/cab.jpg') }}" alt="Travel" style="width: 100%; max-width: 98vw; height: 210px; object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Featured Vehicles Section -->
    <section class="award-hero-section position-relative d-flex align-items-center justify-content-center py-5" style="min-height:440px; background: linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)), url('{{asset('images/banners/banner3.jpg')}}') center center / cover no-repeat fixed;">
        <div class="container position-relative z-2">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 col-12">
                    <div class="text-center text-white py-5 px-3">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="fw-bold" style="font-family: 'Playfair Display', serif; font-size:2.5rem; letter-spacing:0.04em;">Let's Check Available Cabs</h2>
                            <a href="{{ route('vehicles.index') }}" class="btn btn-outline-warning btn-sm">View All</a>
                        </div>
                        <div class="mb-4 text-white">
                            <span>Choose from our wide range of comfortable and well-maintained vehicles for your journey. From luxury cars to spacious SUVs and tempo travelers, we have the perfect ride for every trip.</span>
                        </div>
                        <div class="row justify-content-center">
                            @if(isset($featuredVehicles) && $featuredVehicles->count() > 0)
                                @foreach($featuredVehicles->take(4) as $vehicle)
                                    <div class="col-md-6 col-lg-3 mb-4">
                                        <div class="card border-0 shadow h-100 text-dark mx-auto" style="max-width: 400px;">
                                            <img src="{{ (str_starts_with($vehicle->image, 'http') || str_starts_with($vehicle->image, '/')) ? $vehicle->image : asset($vehicle->image) }}"
                                                class="card-img-top"
                                                style="height:180px; object-fit:cover;"
                                                alt="{{ $vehicle->name }}">
                                            @if($vehicle->is_available)
                                                <div class="position-absolute top-0 start-0 m-3 bg-success text-white rounded-pill px-3 py-1 fw-semibold shadow-sm"
                                                    style="font-size:0.85rem;">
                                                    <i class="bi bi-check-circle me-1"></i>Available
                                                </div>
                                            @else
                                                <div class="position-absolute top-0 start-0 m-3 bg-secondary text-white rounded-pill px-3 py-1 fw-semibold shadow-sm"
                                                    style="font-size:0.85rem;">
                                                    Booked
                                                </div>
                                            @endif
                                            <div class="position-absolute top-0 end-0 m-3 bg-white rounded-pill px-3 py-1 d-flex align-items-center shadow-sm"
                                                style="font-size:0.95rem;">
                                                <i class="bi bi-star-fill text-warning me-1"></i> {{ number_format($vehicle->average_rating ?? 4.5, 1) }}
                                            </div>
                                            <div class="card-body pb-3">
                                                <h5 class="card-title fw-bold mb-1">{{ $vehicle->name }}</h5>
                                                <div class="d-flex align-items-center mb-2">
                                                    <i class="bi bi-car-front text-primary me-2"></i>
                                                    <span class="text-secondary">{{ $vehicle->type ?? 'Car' }}</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <span class="fw-bold text-dark">₹{{ number_format($vehicle->price_per_day) }}</span>
                                                        <span class="text-muted small">/day</span>
                                                    </div>
                                                    <span class="text-secondary small">
                                                        <i class="bi bi-people me-1"></i>{{ $vehicle->seating_capacity ?? 4 }} Seats
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="card border-0 shadow rounded-4 h-100 text-dark mx-auto" style="max-width: 400px;">
                                        <div class="card-body pb-3">
                                            <p class="text-light">No cabs available at the moment.</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                 <!-- left: image -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/Taxi.jpg') }}" alt="SSP Tour & Travel Cab" class="rounded-4 w-100" style="max-width:700px; height:auto; object-fit:cover;">
                </div>
                <!-- right: Text and Button -->
                <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Reliable Taxi Service in Delhi - Comfortable, Safe & Always On Time</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>Want to find a taxi service in Delhi that is safe, cheap, and quick to book? Choosing the correct cab service in Delhi makes every trip easy and stress-free, whether it's for work, the airport, a business meeting, or a family adventure. A professional tour and travel service makes sure that every ride is safe and comfortable by making sure that drivers are on time, that their vehicles are in good shape, and that they are on time.</p>
                        <p>Delhi traffic can be hard to predict, which is why it's important to use a taxi service that knows what it's doing. Drivers who know what they're doing know the best routes and shortcuts during rush hour. A reliable taxi service in Delhi makes sure that pickups are on time, prices are clear, and the service is available 24/7. Everyone, from people travelling alone to business groups, can benefit from a trusted transportation partner.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

     <!-- Flash Offer Banner Section -->
    <section class="py-4 py-md-5" style="background: linear-gradient(120deg, rgba(8, 8, 8, 0.7) 0%, rgba(3, 3, 3, 0.6) 100%), url('{{ asset('images/cab2.jpg') }}') center/cover no-repeat; min-height: 300px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="offer-banner-wrapper rounded-4 overflow-hidden shadow-lg position-relative" style="background: linear-gradient(120deg, rgba(8, 8, 8, 0.7) 0%, rgb(255 235 175 / 88%) 100%); min-height: 300px;">
                        <!-- Decorative Pattern Overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.04\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); opacity: 0.3; mix-blend-mode: overlay;"></div>
                        
                        <div class="row g-0 align-items-center position-relative" style="z-index: 2;">
                            <!-- Left: Offer Text -->
                            <div class="col-12 col-md-7 p-4 p-md-5">
                                <div class="offer-content">
                                    <div class="mb-3">
                                        <span class="badge bg-warning text-dark fw-bold px-3 py-2 d-inline-flex align-items-center" style="font-size:0.9rem; border-radius:1.5rem; box-shadow: 0 3px 8px rgba(255,184,0,0.4);">
                                            <i class="bi bi-lightning-fill me-1"></i>Limited Offer
                                        </span>
                                    </div>
                                    <h2 class="fw-bold mb-3 text-white" style="font-size:clamp(1.7rem, 4vw, 2.2rem); line-height:1.25; text-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                                        Get Up to <span class="text-warning">50% OFF</span><br>on Cab Bookings
                                    </h2>
                                    <p class="text-white mb-4 opacity-90 d-none d-md-block" style="font-size:1rem; max-width: 400px;">
                                        Book your cab now and save big! Limited slots available for this season.
                                    </p>
                                    <a href="{{ route('vehicles.index') }}" class="btn btn-warning btn-lg rounded-pill px-4 px-md-5 fw-bold d-inline-flex align-items-center shadow-lg" style="font-size:1rem;">
                                        Book Now <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Right: Images Collage -->
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center p-3 p-md-4">
                                <!-- Desktop View -->
                                <div class="position-relative d-none d-md-block" style="width: 100%; max-width: 320px; height: 240px;">
                                    <!-- Main Image -->
                                    <div class="position-absolute" style="top: 30px; right: 10px; z-index: 3;">
                                        <img src="{{ asset('images/icon4.webp') }}" alt="Travel" style="width: 160px; height: 160px; object-fit: cover;">
                                    </div>
                                    <!-- Secondary Image -->
                                    <div class="position-absolute" style="bottom: 10px; left: 10px; z-index: 2;">
                                        <img src="{{ asset('images/icon2.png') }}" alt="Destination" style="width: 140px; height: 140px; object-fit: cover;">
                                    </div>
                                    <!-- Floating Badge -->
                                    <div class="position-absolute" style="top: 5px; left: 20px; z-index: 4;">
                                        <div class="bg-warning rounded-circle shadow-lg d-flex align-items-center justify-content-center" style="width: 65px; height: 65px; animation: pulse 2s infinite;">
                                            <div class="text-center">
                                                <div class="fw-bold text-dark" style="font-size: 1.3rem; line-height: 1;">50%</div>
                                                <div class="text-dark small fw-semibold" style="font-size: 0.65rem;">OFF</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mobile View -->
                                <div class="d-md-none w-100 position-relative" style="height: 200px;">
                                    <div class="d-flex gap-2 justify-content-center align-items-center h-100">
                                        <div class="position-relative">
                                            <img src="{{ asset('images/icon4.webp') }}" alt="Travel" class="shadow-lg" style="width: 140px; height: 140px; object-fit: cover;">
                                            <div class="position-absolute top-0 end-0 translate-middle">
                                                <div class="bg-warning rounded-circle shadow-lg d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                                    <div class="text-center">
                                                        <div class="fw-bold text-dark" style="font-size: 1rem; line-height: 1;">50%</div>
                                                        <div class="text-dark small fw-semibold" style="font-size: 0.55rem;">OFF</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <img src="{{ asset('images/icon2.png') }}" alt="Destination" class="shadow-lg" style="width: 120px; height: 120px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @keyframes pulse {
                0%, 100% { transform: scale(1); }
                50% { transform: scale(1.05); }
            }
            @media (max-width: 767.98px) {
                .offer-banner-wrapper {
                    min-height: 380px !important;
                }
                .offer-content h2 {
                    font-size: 1.7rem !important;
                }
                .testi-controller {
                    margin-bottom: 110px !important;
                }
                .testi-controller .carousel-control-prev {
                    left: 20% !important;
                }
                .testi-controller .carousel-control-next {
                    left: 70% !important;
                }
            }
        </style>
    </section>

    <!-- Popular Routes Section -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0">Popular Routes</h2>
                <a href="{{ route('routes.index') }}" class="btn btn-outline-primary btn-sm">View All</a>
            </div>
            <div class="mb-4 text-secondary">
                <span>Explore the most scenic and adventurous routes across India. Perfect for road trips, bike tours,
                    and travel enthusiasts looking for unforgettable journeys through breathtaking landscapes.</span>
            </div>
            <div id="popularRoutesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @if($featuredRoutes->count() > 0)
                        @php
                            $totalRoutes = $featuredRoutes->count();
                            $visibleRouteCards = 3;
                        @endphp
                        @for($i = 0; $i < $totalRoutes; $i++)
                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                                <div class="row g-4">
                                    @for($j = 0; $j < $visibleRouteCards; $j++)
                                        @php
                                            $routeIndex = ($i + $j) % $totalRoutes;
                                            $route = $featuredRoutes[$routeIndex];
                                        @endphp
                                        <div class="col-12 col-md-4 {{ $j > 0 ? 'd-none d-md-block' : '' }}">
                                            @if($route && !empty($route->slug))
                                                <a href="{{ route('routes.show', $route->slug) }}" class="text-decoration-none">
                                                    <div class="card border-0 position-relative overflow-hidden rounded-4 h-100">
                                                        <img src="{{ (str_starts_with($route->image, 'http') || str_starts_with($route->image, '/')) ? $route->image : asset($route->image) }}"
                                                            class="card-img-top"
                                                            style="height:240px; object-fit:cover; border-radius:2rem 2rem 0 0;"
                                                            alt="{{ $route->name }}">
                                                        @if($route->difficulty_level)
                                                            <div class="position-absolute top-0 start-0 m-3 bg-white rounded-pill px-3 py-1 fw-semibold shadow-sm"
                                                                style="font-size:0.85rem;">
                                                                {{ ucfirst($route->difficulty_level) }}
                                                            </div>
                                                        @endif
                                                        <div class="position-absolute top-0 end-0 m-3 bg-white rounded-pill px-3 py-1 d-flex align-items-center shadow-sm"
                                                            style="font-size:0.95rem;">
                                                            <i class="bi bi-star-fill text-warning me-1"></i> {{ number_format($route->average_rating ?? 4.5, 1) }}
                                                        </div>
                                                        <div class="card-body pb-3">
                                                            <h5 class="card-title fw-bold mb-1 text-dark">{{ Str::limit($route->name, 35) }}</h5>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                                                <span class="text-secondary">{{ Str::limit($route->start_location ?? 'India', 20) }} → {{ Str::limit($route->end_location ?? 'India', 15) }}</span>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <span class="badge bg-info bg-opacity-10 text-info fw-semibold px-3 py-2">
                                                                    {{ $route->distance ?? 'N/A' }}
                                                                </span>
                                                                <span class="text-secondary small"><i class="bi bi-clock me-1"></i>{{ $route->estimated_duration ?? '1 Day' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @else
                                                <div class="card border-0 position-relative overflow-hidden rounded-4 h-100 bg-light text-center d-flex align-items-center justify-content-center" style="min-height:240px;">
                                                    <span class="text-muted">Vehicle info unavailable</span>
                                                </div>
                                            @endif
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    @else
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-12 text-center py-5">
                                    <p class="text-muted">No popular routes available at the moment.</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#popularRoutesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#popularRoutesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- content section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <!-- left: Text and Button -->
                <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Easy Booking with Local Availability</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                            A lot of people look for "taxi service near me" when they need a ride right away. Quick confirmation and easy access to surrounding vehicles are quite important. A nearby cab service that is responsive makes sure that the journey comes quickly. This makes customers more likely to trust you and stay with you for a long time.
                        </p>
                        <p>
                            A good taxi service in Delhi also lets you choose from a variety of transportation alternatives, such as hourly rentals, full-day reservations, airport transfers, and city tours. The cab service in Delhi is more than simply a way to get around; with expert help and clear communication, it becomes a reliable way to travel.
                        </p>
                    </div>
                </div>
                 <!-- right: image -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/route.jpg') }}" alt="SSP Tour & Travel Cab" class="rounded-4 w-100" style="max-width:700px; height:auto; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Slider Section (Indian Travelers) -->
    <section class="py-5" style="background: #f7fafd;">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2" style="font-size:2.3rem;">Hear It from Travelers</h2>
                <div class="text-secondary mb-2" style="font-size:1.15rem;">We go beyond just booking trips—we create unforgettable travel experiences that match your dreams!</div>
            </div>
            <div class="position-relative">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500" data-bs-pause="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12 col-md-4">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★☆</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Average Experience</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">The Kerala tour was wonderful! Houseboat stay, local food, and the backwaters were truly memorable. Thanks for the smooth arrangements.</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Amit Sharma" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Amit Sharma</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-none d-md-block">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★★</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Great Experience!</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">Our Rajasthan trip was perfectly planned. The guides were knowledgeable and friendly. Every detail was handled with care. Highly recommended!</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Verma" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Priya Verma</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-none d-md-block">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★☆</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Great Visitors Venue!</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">We had an amazing Himachal tour! The itinerary, bookings, and support were all professionally managed. Will book again!</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rahul Singh" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Rahul Singh</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row g-4 justify-content-center">
                                <div class="col-12 col-md-4">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★★</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Memorable Family Trip</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">Our Goa vacation was a delight! The beach resort, sightseeing, and food were all top-notch. Kids loved the dolphin cruise!</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sunita Joshi" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Sunita Joshi</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-none d-md-block">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★☆</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Excellent Service</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">The Varanasi spiritual tour was a life-changing experience. The arrangements for Ganga Aarti and temple visits were perfect.</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Suresh Patel" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Suresh Patel</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-none d-md-block">
                                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4">
                                        <div class="mb-2">
                                            <img src="https://img.icons8.com/color/48/000000/trust--v1.png" alt="rating" style="height: 28px;">
                                            <span class="ms-2 align-middle" style="font-size:1.1rem; color:#00b67a;">★★★★★</span>
                                        </div>
                                        <h5 class="fw-bold mb-2">Best Solo Trip</h5>
                                        <div class="mb-3 text-secondary" style="font-size:1.08rem;">Exploring Ladakh with SSP Tour &amp; Travel was a dream come true. The bike tour, stays, and support team were fantastic. Will recommend to friends!</div>
                                        <div class="d-flex align-items-center mt-auto">
                                            <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="Vikram Mehra" class="rounded-circle me-3" style="width:48px; height:48px; object-fit:cover;">
                                            <div>
                                                <div class="fw-bold">Vikram Mehra</div>
                                                <div class="text-secondary small">SSP Tour &amp; Travel Traveler</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Fallback JS for auto sliding if Bootstrap attributes are not enough
    document.addEventListener('DOMContentLoaded', function() {
        var testimonialCarousel = document.getElementById('testimonialCarousel');
        if (testimonialCarousel && typeof bootstrap !== 'undefined') {
            var carousel = bootstrap.Carousel.getOrCreateInstance(testimonialCarousel, {
                interval: 2500,
                ride: 'carousel',
                pause: false
            });
            carousel.cycle();
        }
    });
    </script>

    <!-- Stats/Counters Section -->
    <section class="py-5" style="background: #ebfff387;" id="statsSection">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2" style="font-size:2.3rem;">Our Achievements in Numbers</h2>
                <div class="text-secondary mb-2" style="font-size:1.15rem; margin:auto;">
                    We are proud of the journeys we have completed, the happy travelers we have served, and the trust we have built over the years. Here are some of our key milestones and stats!
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="bg-white rounded-4 shadow-sm text-center py-5 h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Tour Completed" style="height:48px; margin-bottom:12px; color:#eab308;">
                        <div class="fw-bold display-6 mb-1 counter" data-target="12000" style="color:#222;">0</div>
                        <div class="fw-semibold text-dark" style="font-size:1.1rem;">Tour Completed</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="bg-white rounded-4 shadow-sm text-center py-5 h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="Travel Experience" style="height:48px; margin-bottom:12px; color:#ea580c;">
                        <div class="fw-bold display-6 mb-1 counter" data-target="7" data-suffix="+" style="color:#222;">0</div>
                        <div class="fw-semibold text-dark" style="font-size:1.1rem;">Years Experience</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="bg-white rounded-4 shadow-sm text-center py-5 h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/201/201634.png" alt="Happy Traveler" style="height:48px; margin-bottom:12px; color:#2563eb;">
                        <div class="fw-bold display-6 mb-1 counter" data-target="5000" data-suffix="+" style="color:#222;">0</div>
                        <div class="fw-semibold text-dark" style="font-size:1.1rem;">Happy Travelers</div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="bg-white rounded-4 shadow-sm text-center py-5 h-100 d-flex flex-column align-items-center justify-content-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/201/201614.png" alt="Retention Rate" style="height:48px; margin-bottom:12px; color:#16a34a;">
                        <div class="fw-bold display-6 mb-1 counter" data-target="97" data-suffix="%" style="color:#222;">0</div>
                        <div class="fw-semibold text-dark" style="font-size:1.1rem;">Retention Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- content section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: Text and Button -->
                <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Travelling around the city safely and comfortably</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                            Any reputable cab service in Delhi prioritises safety above all else. Vehicles are repaired on a regular basis, drivers' backgrounds are checked, and GPS tracking makes sure that routes are clear. A cab service in Delhi that puts the customer first keeps its cars clean and has nice drivers, which makes the trip more enjoyable.
                        </p>
                        <p>
                            People usually search for a <b>cab service near me</b> when they need a fast and dependable ride. A strong fleet network helps ensure that both <b>taxi service near me</b> searches and regular city rides are handled smoothly and without delays. Quick response time, clean vehicles, and professional drivers create a positive travel experience, helping a tour and travel agency build customer trust and long-term loyalty.
                        </p>
                    </div>
                </div>
                <!-- Right: Gallery Collage -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/img3.png') }}" alt="SSP Tour & Travel Cab" class="rounded-4 w-100" style="height:auto;">
                </div>
            </div>
        </div>
    </section>
   
    <!-- Award/Trust Section (moved below booking form) -->
    <section class="py-5 award-trust-bg position-relative">
        <div class="award-trust-overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55); z-index:1;"></div>
            <div class="container position-relative" style="z-index:2;">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-10 col-12">
                        <div class="text-center text-white py-5 px-3">
                            <div class="mb-3">
                                <span class="d-inline-block mb-2" style="font-size:2.5rem;"><i class="bi bi-trophy-fill text-warning"></i></span>
                            </div>
                            <h2 class="fw-bold mb-2" style="font-family: 'Playfair Display', serif; font-size:2.5rem; letter-spacing:0.04em;">Trusted Travel Partner in India</h2>
                            <div class="mb-3">
                                <span class="fs-5 text-light">Recognized as <span class="text-warning fw-bold">India's Leading Cab Service</span> for exceptional rides, safety, and customer satisfaction across all Indian cities.</span>
                            </div>
                            <div class="mb-4">
                                <span class="fs-3 text-warning">★★★★★</span>
                            </div>
                            <a href="{{ route('vehicles.index') }}" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow">Book Your Cab <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .award-trust-bg {
                background: linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)), url('{{ asset('images/banners/banner2.webp') }}') center center / cover no-repeat fixed;
                position: relative;
                min-height: 440px;
            }
            .award-trust-bg .award-trust-overlay {
                pointer-events: none;
            }
        </style>
    </section>

    <!-- content section -->
    <section class="py-5" style="background: #fff;">
        <div class="container">
            <div class="row align-items-center">
                 <!-- left: image -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/Taxi.jpg') }}" alt="SSP Tour & Travel Cab" class="rounded-4 w-100" style="max-width:700px; height:auto; object-fit:cover;">
                </div>
                <!-- right: Text and Button -->
                <div class="col-12 col-lg-7 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Outstation Cab Service in Delhi - Travel Beyond the City</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                           Are you planning a business trip or a weekend getaway? A professional outstation cab service in Delhi has qualified highway drivers who can take you long distances in comfort. A coordinated outstation taxi service in Delhi makes sure that your trip to Jaipur, Agra, or the surrounding hill stations is easy and stress-free.
                        </p>
                        <p>
                            The outstation cab service in Delhi can help with both family vacations and business trips because it has customizable packages and a wide range of vehicles to choose from. A reliable outstation taxi service in Delhi has clear prices, clean cars, and leaves on time, so there are no surprises during the trip.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- FAQs Section (2-column professional layout) -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">
                <!-- Left: Image & Intro -->
                <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                    <div class="faq-left-box text-center text-lg-start">
                        <img src="{{ asset('images/icon1.png') }}" alt="FAQs" class="img-fluid  mb-4" style="max-width: 340px;">
                        <h2 class="fw-bold mb-3" style="font-size:2.2rem;">Frequently Asked Questions</h2>
                        <p class="text-secondary mb-0" style="font-size:1.1rem;">Find answers to the most common questions about our cab booking, safety, and services. Still have queries? <a href="{{ route('contact') }}" class="text-primary fw-semibold">Contact us</a> anytime!</p>
                    </div>
                </div>
                <!-- Right: FAQs Accordion -->
                <div class="col-12 col-lg-7">
                    <div class="accordion accordion-flush" id="faqsAccordion">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    How do I book a cab with SSP Tour & Travel?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    You can book a cab easily using our online booking form above, or by calling our customer support. Just select your route, date, and cab type, and confirm your booking in a few clicks!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Are your cabs sanitized and safe?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    Yes, all our cabs are thoroughly sanitized before every trip. We follow strict hygiene protocols and our drivers are trained for your safety and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Can I book a cab for outstation or multi-city trips?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    Absolutely! We offer cab services for outstation, one-way, round-trip, and multi-city journeys across India. Just mention your requirements while booking.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                    What payment options are available?
                                </button>
                            </h2>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    We accept all major payment methods including UPI, credit/debit cards, net banking, and cash payments to the driver.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                    How can I contact customer support?
                                </button>
                            </h2>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    You can reach our 24x7 customer support via phone, email, or WhatsApp. Visit our Contact page for details.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .faq-left-box h2 {
                color: #222;
            }
            .faq-left-box p {
                max-width: 420px;
                margin-left: auto;
                margin-right: auto;
            }
            @media (max-width: 991.98px) {
                .faq-left-box {
                    margin-bottom: 2rem;
                }
            }
        </style>
    </section>

    <!-- content section-->
    <section class="cab-booking-modern-section py-5" style="background: linear-gradient(120deg,#fff 60%,#f7fafd 100%);">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">
                <!-- Left: content -->
                <div class="col-12 col-lg-6">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">How This Benefits a Tour & Travel Agency</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                           A travel agency's brand value goes up when it offers a reliable taxi service in Delhi. Customers give good evaluations and tell others about a cab service in Delhi when they always get good service. This makes you more important online and helps you show up more in local searches.
                        </p>
                        <p>
                            Using keywords like "taxi service near me" and "cab service near me" can help your local SEO rankings. Promoting services like outstation cab service in Delhi and outstation taxi service in Delhi draws in travellers who are going on longer trips. Because of this, more people book, customers stay longer, and sales keep going up.
                        </p>
                    </div>
                </div>
                <!-- Right: Cab Image & Highlights -->
                <div class="col-12 col-lg-6">
                    <div class="cab-booking-side-info d-flex flex-column align-items-center justify-content-center h-100">
                        <img src="{{ asset('images/img.jpg') }}" alt="Cab" class="mb-4" style="height:300px;">
                        <div class="mb-3 text-center">
                            <span class="badge bg-warning text-dark fw-bold px-3 py-2 mb-2" style="font-size:1rem;border-radius:1.5rem;">Best Price Guarantee</span>
                            <div class="fw-bold fs-5 text-dark mb-2">Safe, Comfortable & Reliable</div>
                            <div class="text-secondary mb-2">Professional drivers, sanitized cabs, 24x7 support</div>
                            <div class="d-flex justify-content-center gap-3 mt-2">
                                <span class="bg-success text-white rounded-pill px-3 py-1 fw-semibold shadow-sm" style="font-size:0.95rem;">Available</span>
                                <span class="bg-primary text-white rounded-pill px-3 py-1 fw-semibold shadow-sm" style="font-size:0.95rem;">4.8 ★ Rated</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .cab-booking-form-wrapper {
                background: #fff;
                border-radius: 2rem;
                box-shadow: 0 4px 32px rgba(255,184,0,0.08);
            }
            .cab-booking-form-wrapper input,
            .cab-booking-form-wrapper select {
                border-radius: 1rem;
                border: 1.5px solid #eaeaea;
                font-size: 1.05rem;
                padding: 0.7rem 1rem;
            }
            .cab-booking-form-wrapper label {
                color: #222;
                font-weight: 600;
                margin-bottom: 0.35rem;
            }
            .cab-booking-form-wrapper .btn-warning {
                background: linear-gradient(90deg,#ffb800 60%,#ffe066 100%);
                color: #222;
                font-size: 1.15rem;
                border-radius: 2rem;
                box-shadow: 0 2px 12px rgba(255,184,0,0.18);
            }
            .cab-booking-side-info img {
                width: 100%;
                max-width: 380px;
                height: auto;
                border-radius: 1.5rem;
            }
            @media (max-width: 991.98px) {
                .cab-booking-modern-section .row {
                    flex-direction: column-reverse;
                }
                .cab-booking-side-info {
                    margin-bottom: 2rem;
                }
                .cab-booking-side-info img {
                    max-width: 98vw;
                    height: 300px;
                    object-fit: cover;
                }
            }
        </style>
    </section>

    <!-- content section-->
    <section class="cab-booking-modern-section py-5" style="background: linear-gradient(120deg,#fff 60%,#f7fafd 100%);">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">
                <!-- Left: content -->
                <div class="col-12 col-lg-12">
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Customer-Focused & SEO-Friendly Approach</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                           A professional taxi service in Delhi knows that happy customers are the key to a successful business. Trust is built via clear billing, friendly drivers, and quick customer service. A reliable cab service in Delhi also helps keep a good internet reputation, which is important for getting higher search results.
                        </p>
                        <p>
                           If you're looking for a taxi or cab service near me, you want one that is reliable and lets you book quickly. The agency becomes a full travel partner when you add in reliable outstation cab service and outstation taxi service in Delhi.
                        </p>
                    </div>
                    <h2 class="fw-bold mb-3" style="font-size:2rem;">Last Thoughts</h2>
                    <div class="mb-4 text-secondary" style="font-size:1rem;">
                        <p>
                            Safety, comfort, and professionalism are all important while picking a taxi service in Delhi. A reliable cab service in Delhi that is supported by a well-known travel and tour company makes sure that local rides go well and out-of-town journeys are stress-free. With a strong local presence for taxi service near me, quick response for cab service near me, and trustworthy outstation cab service in Delhi and outstation taxi service in Delhi, travellers can experience convenience at every stage while the business gains trust and grows.
                        </p>
                </div>
            </div>
        </div>
    </section>
                                    

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            let animated = false;

            const animateCounter = (counter) => {
                const target = parseInt(counter.getAttribute('data-target'));
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString() + suffix;
                    }
                };

                updateCounter();
            };

            const checkPosition = () => {
                if (animated) return;

                const statsSection = document.getElementById('statsSection');
                if (!statsSection) return;

                const sectionTop = statsSection.getBoundingClientRect().top;
                const triggerPoint = window.innerHeight * 0.8;

                if (sectionTop < triggerPoint) {
                    animated = true;
                    counters.forEach(counter => {
                        animateCounter(counter);
                    });
                }
            };

            // Check on scroll
            window.addEventListener('scroll', checkPosition);
            // Check on load (in case section is already in view)
            checkPosition();
        });
    </script>

@endsection
