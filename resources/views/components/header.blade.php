@php
    use App\Models\Setting;
    $settings = Cache::remember('site_settings', 3600, function() {
        return Setting::pluck('value', 'key')->toArray();
    });
    use App\Models\Location;
    $headerLocations = Cache::remember('header_locations', 600, function() {
        return Location::where('is_active', true)->orderBy('title')->get(['title','slug']);
    });
@endphp

<header class="shadow-sm bg-white py-2 position-sticky top-0 z-3" style="z-index:1030;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid px-3 w-100 d-flex align-items-center justify-content-between">
            <!-- Logo (always left) -->
            <a class="navbar-brand d-flex align-items-center p-0 m-0" href="/" style="min-width:200px;">
                <img src="{{ asset('images/gallery/logo.png') }}" alt="Logo" style="height:54px; width:auto; margin-right:8px;">
                <span class="fw-semibold d-none d-md-inline-block position-relative" style="font-size:1.32rem; color:#222; letter-spacing:0.2px; font-family:'Segoe UI', 'Arial', sans-serif; line-height:1.1;">
                    SSP Tour <span style="color:#ff6600;">&amp; Travel</span>
                    <span style="display:block; height:3px; width:70%; background:linear-gradient(90deg,#ff6600 60%,#ffe066 100%); border-radius:2px; margin:3px auto 0 auto;"></span>
                </span>
            </a>
            <!-- Toggler always right on mobile -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Desktop Navbar -->
            <div class="collapse navbar-collapse d-none d-lg-flex" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-primary" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/destination">Destination</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="routesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Routes</a>
                        <ul class="dropdown-menu" aria-labelledby="routesDropdown">
                            <li><a class="dropdown-item" href="/routes">All Routes</a></li>
                            <li><a class="dropdown-item" href="/routes/popular">Popular Routes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="locationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Locations</a>
                        <ul class="dropdown-menu" aria-labelledby="locationsDropdown">
                            @forelse($headerLocations as $location)
                                <li><a class="dropdown-item" href="{{ url('/locations/'.$location->slug) }}">{{ $location->title }}</a></li>
                            @empty
                                <li><span class="dropdown-item text-secondary">No locations</span></li>
                            @endforelse
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="vehiclesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vehicles</a>
                        <ul class="dropdown-menu" aria-labelledby="vehiclesDropdown">
                            <li><a class="dropdown-item" href="/vehicles">All Vehicles</a></li>
                            <li><a class="dropdown-item" href="/vehicles/luxury">Luxury Vehicles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
                <!-- Right Side: Contact, Search, Login -->
                <div class="d-flex align-items-center gap-3 ms-lg-3 mt-3 mt-lg-0">
                    <div class="d-flex align-items-center me-3">
                        <span class="rounded-circle border d-flex align-items-center justify-content-center" style="width:36px; height:36px;">
                            <i class="bi bi-telephone fs-5" style="color:#ed5a3b;"></i>
                        </span>
                        <div class="ms-2">
                            <div class="small text-muted">Need Help?</div>
                            <div class="fw-bold text-dark">{{ $settings['contact_whatsapp'] ?? '+91 345 533 865' }}</div>
                        </div>
                    </div>

                    @auth
                        <div class="dropdown">
                            <button class="btn btn-outline-dark dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                                <i class="bi bi-person-circle me-2"></i>{{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/admin/dashboard"><i class="bi bi-speedometer2 me-2"></i>Admin Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>
            </div>
            <!-- Offcanvas Mobile Menu -->
            <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title d-flex align-items-center" id="mobileMenuLabel">
                        <img src="{{ asset('images/gallery/logo.png') }}" alt="Logo" style="height:28px; width:auto; margin-right:7px;">
                        <span class="fw-semibold position-relative" style="font-size:1.02rem; color:#222; letter-spacing:0.2px; font-family:'Segoe UI', 'Arial', sans-serif;">
                            SSP Tour <span style="color:#ff6600;">&amp; Travel</span>
                            <span style="display:block; height:2px; width:60%; background:linear-gradient(90deg,#ff6600 60%,#ffe066 100%); border-radius:2px; margin:2px auto 0 auto;"></span>
                        </span>
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/destination">Destination</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="routesDropdownMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">Routes</a>
                            <ul class="dropdown-menu" aria-labelledby="routesDropdownMobile">
                                <li><a class="dropdown-item" href="/routes">All Routes</a></li>
                                <li><a class="dropdown-item" href="/routes/popular">Popular Routes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="locationsDropdownMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">Locations</a>
                            <ul class="dropdown-menu" aria-labelledby="locationsDropdownMobile">
                                @forelse($headerLocations as $location)
                                    <li><a class="dropdown-item" href="{{ url('/locations/'.$location->slug) }}">{{ $location->title }}</a></li>
                                @empty
                                    <li><span class="dropdown-item text-secondary">No locations</span></li>
                                @endforelse
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="vehiclesDropdownMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vehicles</a>
                            <ul class="dropdown-menu" aria-labelledby="vehiclesDropdownMobile">
                                <li><a class="dropdown-item" href="/vehicles">All Vehicles</a></li>
                                <li><a class="dropdown-item" href="/vehicles/luxury">Luxury Vehicles</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                    <hr>
                    <div class="d-flex flex-column gap-3 mt-3">
                        <div class="d-flex align-items-center">
                            <span class="rounded-circle border d-flex align-items-center justify-content-center" style="width:36px; height:36px;">
                                <i class="bi bi-telephone fs-5"></i>
                            </span>
                            <div class="ms-2">
                                <div class="small text-muted">Need Help?</div>
                                <div class="fw-bold">{{ $settings['contact_whatsapp'] ?? '+91 345 533 865' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
