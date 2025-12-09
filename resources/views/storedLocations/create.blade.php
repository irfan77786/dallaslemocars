@extends('layouts.guest')
@section('guest_data')

<div class="container mt-4 pb-5">
    <a href="{{ route('storedLocations.index') }}">← Back to Locations</a>
    <h3>Add New Location</h3>

    <form action="{{ route('storedLocations.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Address Type</label>
            <select name="address_type" class="form-select" id="address_type" required>
                <option value="home" {{ old('address_type') == 'home' ? 'selected' : '' }}>Home</option>
                <option value="other" {{ old('address_type') == 'other' ? 'selected' : '' }}>Other</option>
            </select>
            @error('address_type') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <!-- Location Label field (hidden by default) -->
        <div class="mb-3" id="location_label_div" style="display: none;">
            <label class="form-label">Label</label>
            <input type="text" name="location_label" class="form-control" value="{{ old('location_label') }}">
            @error('location_label') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Full Address</label>
            <textarea name="address" class="form-control" rows="3" required>{{ old('address') }}</textarea>
            @error('address') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Apt / Suite (optional)</label>
            <input type="text" name="apt_suite" class="form-control" value="{{ old('apt_suite') }}">
            @error('apt_suite') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save Location</button>
        <a href="{{ route('storedLocations.index') }}" class="btn btn-secondary ms-2">Cancel</a>

    </form>
</div>

<script>
    const addressTypeSelect = document.getElementById('address_type');
    const locationLabelDiv = document.getElementById('location_label_div');

    function toggleLabelField() {
        if (addressTypeSelect.value === 'other') {
            locationLabelDiv.style.display = 'block';
        } else {
            locationLabelDiv.style.display = 'none';
        }
    }

    // Initial check on page load
    toggleLabelField();

    // Listen for changes
    addressTypeSelect.addEventListener('change', toggleLabelField);
</script>

@endsection
