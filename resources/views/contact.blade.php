@extends('layout.app')

@section('meta')
    <title>Contact SSP Tourandtravels - Get in Touch</title>
    <meta name="description" content="Contact SSP Tourandtravels for cab bookings, tour packages, and travel support. Reach us by phone, email, or visit our office in New Delhi.">
    <meta name="keywords" content="contact SSP Tourandtravels, cab booking, India tours, phone, email, office">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection
@section('content')
    @php
        use App\Models\Setting;
        $settings = Cache::remember('site_settings', 3600, function() {
            return Setting::pluck('value', 'key')->toArray();
        });
    @endphp

    <!-- Hero Section -->
    <section class="hero-section position-relative w-100" style="background: linear-gradient(rgba(34,34,34,0.6),rgba(34,34,34,0.6)), url('{{ asset('images/contact.webp') }}') center center / cover no-repeat; min-height: 300px;">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 300px;">
            <div class="text-center text-white">
                <h1 class="display-3 fw-bold mb-3">Contact Us</h1>
                <p class="lead">Get in touch with SSP Tour & Travel</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Get In Touch</h2>
                    <p class="text-secondary mb-4">
                        Have questions about our tours? Need help planning your next adventure? We're here to help! Reach out to us through any of the following channels.
                    </p>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Office Address</h6>
                                <p class="text-secondary mb-0">
                                    {!! nl2br(e($settings['contact_address'] ?? '2nd Floor, MG Road, Near Metro Station, Connaught Place, New Delhi 110001, India')) !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-telephone-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Phone</h6>
                                <p class="text-secondary mb-0">
                                    {{ $settings['contact_whatsapp'] ?? '+91 345 533 865' }}<br>
                                    {{ $settings['contact_phone'] ?? '+91 456 453 345' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-envelope-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-secondary mb-0">
                                    {{ $settings['contact_email'] ?? 'info@example.com' }}<br>
                                    support@example.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-clock-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Working Hours</h6>
                                <p class="text-secondary mb-0">
                                    Monday - Saturday: 9:00 AM - 7:00 PM<br>
                                    Sunday: 10:00 AM - 5:00 PM
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="{{ $settings['social_facebook'] ?? '#' }}" class="btn btn-primary btn-sm rounded-circle" style="width: 40px; height: 40px; line-height: 26px;"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $settings['social_linkedin'] ?? '#' }}" class="btn btn-info btn-sm rounded-circle text-white" style="width: 40px; height: 40px; line-height: 26px;"><i class="bi bi-linkedin"></i></a>
                        <a href="{{ $settings['social_instagram'] ?? '#' }}" class="btn btn-danger btn-sm rounded-circle" style="width: 40px; height: 40px; line-height: 26px;"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $settings['whatsapp_link'] ?? 'https://wa.me/919876543210' }}" class="btn btn-success btn-sm rounded-circle" style="width: 40px; height: 40px; line-height: 26px;"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7">
                    <div class="bg-light rounded-4 shadow p-4">
                        <h3 class="fw-bold mb-4">Send us a Message</h3>

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

    <!-- Map Section (Optional) -->
    <section class="py-0">
        <div class="container-fluid px-0">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9746128867854!2d77.21454931508028!3d28.63229198242619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd371d9e2c6b%3A0xb38cbfb5ba3d0c7e!2sConnaught%20Place%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1644332211234!5m2!1sen!2sin" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>
@endsection
