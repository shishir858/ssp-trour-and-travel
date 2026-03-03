@php
    use App\Models\Setting;
    $settings = Cache::remember('site_settings', 3600, function() {
        return Setting::pluck('value', 'key')->toArray();
    });
@endphp

<footer class="bg-dark text-light pt-5 pb-3 mt-8 position-relative" style="overflow:hidden;">
    <!-- Top Inquiry Row -->
    <div class="container mb-4">
        <div class="row align-items-center gy-3">
            <div class="col-md-4 d-flex align-items-center mb-2 mb-md-0">
                <i class="bi bi-chat-dots fs-1 text-primary me-3"></i>
                <div>
                    <div class="fw-bold fs-5">To More Inquiry</div>
                    <div class="small">Don't hesitate Call to SSP Tour & Travel.</div>
                </div>
            </div>
            <div class="col-md-8 d-flex flex-wrap justify-content-md-end gap-4">
                <div class="d-flex align-items-center">
                    <a href="{{ $settings['whatsapp_link'] ?? 'https://wa.me/919876543210' }}" target="_blank" class="d-flex align-items-center text-decoration-none">
                        <span class="bg-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width:36px; height:36px;"><i class="bi bi-whatsapp text-success fs-4"></i></span>
                        <div>
                            <div class="small text-secondary">WhatsApp</div>
                            <div class="fw-bold text-light">{{ $settings['contact_whatsapp'] ?? '+91 345 533 865' }}</div>
                        </div>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <a href="mailto:{{ $settings['contact_email'] ?? 'info@example.com' }}" class="d-flex align-items-center text-decoration-none">
                        <span class="bg-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width:36px; height:36px;"><i class="bi bi-envelope text-primary fs-4"></i></span>
                        <div>
                            <div class="small text-secondary">Mail Us</div>
                            <div class="fw-bold text-light">{{ $settings['contact_email'] ?? 'info@example.com' }}</div>
                        </div>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '+919876543210') }}" class="d-flex align-items-center text-decoration-none">
                        <span class="bg-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width:36px; height:36px;"><i class="bi bi-telephone text-primary fs-4"></i></span>
                        <div>
                            <div class="small text-secondary">Call Us</div>
                            <div class="fw-bold text-light">{{ $settings['contact_phone'] ?? '+91 456 453 345' }}</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-secondary m-0">
    <div class="container pt-4 pb-2">
        <div class="row gy-4">
            <!-- Logo/About -->
            <div class="col-md-3">
                <div class="mb-3 d-flex align-items-center">
                    <img src="{{ asset('images/gallery/logo.png') }}" alt="Logo" style="height:48px; width:auto; margin-right:10px;">
                </div>
                <div class="fw-bold mb-2">SSP Tour Agency</div>
                <div class="small text-white mb-2">{!! nl2br(e($settings['contact_address'] ?? '2nd Floor, MG Road, Near Metro Station, Connaught Place, New Delhi 110001, India')) !!}</div>
                <div class="d-flex gap-2 mt-3">
                    <a href="{{ $settings['social_facebook'] ?? '#' }}" class="text-light bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:36px; height:36px;"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $settings['social_linkedin'] ?? '#' }}" class="text-light bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:36px; height:36px;"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ $settings['social_youtube'] ?? '#' }}" class="text-light bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:36px; height:36px;"><i class="bi bi-youtube"></i></a>
                    <a href="{{ $settings['social_instagram'] ?? '#' }}" class="text-light bg-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:36px; height:36px;"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <!-- Top Destinations (Static) -->
            <div class="col-md-3">
                <div class="fw-bold mb-3">Popular Routes</div>
                @php
                    use App\Models\Route;
                    $footerRoutes = Cache::remember('footer_routes', 600, function() {
                        return Route::where('is_active', true)->orderByDesc('is_popular')->orderBy('name')->limit(5)->get(['name','slug']);
                    });
                @endphp
                <ul class="list-unstyled small">
                    @forelse($footerRoutes as $route)
                        <li><a href="{{ url('/routes/'.$route->slug) }}" class="text-light text-decoration-none">{{ $route->name }}</a></li>
                    @empty
                        <li class="text-secondary">No routes available</li>
                    @endforelse
                </ul>
            </div>
            <!-- Quick Links (Replaces Popular Searches) -->
            <div class="col-md-3">
                <div class="fw-bold mb-3">Quick Links</div>
                <ul class="list-unstyled small">
                    <li><a href="/" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="/about" class="text-light text-decoration-none">About Us</a></li>
                    <li><a href="/routes" class="text-light text-decoration-none">Routes</a></li>
                    <li><a href="/vehicles" class="text-light text-decoration-none">Vehicles</a></li>
                    <li><a href="/contact" class="text-light text-decoration-none">Contact Us</a></li>
                </ul>
            </div>
            <!-- Map (Replaces Resources) -->
            <div class="col-md-3">
                <div class="fw-bold mb-3">Our Location</div>
                <div class="ratio ratio-4x3 rounded shadow overflow-hidden">
                    <iframe src="https://www.google.com/maps?q=Connaught+Place,+New+Delhi,+India&output=embed" width="100%" height="100%" style="border:0; min-height:120px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <hr class="border-secondary mt-4 mb-2">
        <div class="text-center small text-secondary">
            &copy; {{ date('Y') }} SSP Tour & Travel. All rights reserved.
        </div>
    </div>
    <!-- Fixed WhatsApp and Call Icons -->
    <a href="{{ $settings['whatsapp_link'] ?? 'https://wa.me/919876543210' }}" target="_blank" class="position-fixed end-0 bottom-0 mb-4 me-4 bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="width:56px; height:56px; z-index:1050; bottom:40px !important;">
        <i class="bi bi-whatsapp fs-2"></i>
    </a>
    <a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '+919876543210') }}" class="position-fixed end-0 bottom-0 mb-20 me-4 text-white rounded-circle d-flex align-items-center justify-content-center shadow call-button-shake" style="background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%); width:60px; height:60px; z-index:1050; bottom:160px !important;">
        <i class="bi bi-telephone-fill fs-2"></i>
        <span class="position-absolute call-ring"></span>
        <span class="position-absolute call-ring" style="animation-delay: 0.5s;"></span>
    </a>

    <!-- Call Button Animation Styles -->
    <style>
        @keyframes phoneShake {
            0%, 100% { transform: rotate(0deg); }
            10%, 30%, 50%, 70%, 90% { transform: rotate(-8deg); }
            20%, 40%, 60%, 80% { transform: rotate(8deg); }
        }

        @keyframes ringPulse {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.4);
                opacity: 0.3;
            }
            100% {
                transform: scale(1.8);
                opacity: 0;
            }
        }

        .call-button-shake {
            animation: phoneShake 1s ease-in-out infinite;
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.5);
            transition: all 0.3s ease;
        }

        .call-ring {
            content: '';
            width: 100%;
            height: 100%;
            border: 3px solid #ff6b35;
            border-radius: 50%;
            animation: ringPulse 2s infinite;
            top: 0;
            left: 0;
        }

        .call-button-shake:hover {
            animation: none;
            transform: scale(1.15);
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.8);
            background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%);
        }

        .call-button-shake:hover .call-ring {
            animation: none;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .call-button-shake {
                width: 52px !important;
                height: 52px !important;
                bottom: 120px !important;
            }
        }
    </style>
</footer>
