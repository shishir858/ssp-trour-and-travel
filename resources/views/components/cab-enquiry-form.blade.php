@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="cab-booking-form-wrapper bg-white">
    <form method="POST" action="{{ route('cab-enquiry.store') }}">
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
                <label class="form-label fw-semibold">Pick Up Location</label>
                <input type="text" class="form-control" name="pickup_location" placeholder="Enter location" value="{{ old('pickup_location') }}" required>
                @error('pickup_location')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Drop Off Location</label>
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
