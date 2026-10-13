@props([
    'theme' => 'light',
    'action' => null,
    'id' => null,
])

@php
    $siteKey = config('services.turnstile.site_key');
    $enabled = filled($siteKey) && filled(config('services.turnstile.secret_key'));
@endphp

@if ($enabled)
    <div {{ $attributes->class(['mb-15']) }}>
        <div @if ($id) id="{{ $id }}" @endif
            class="cf-turnstile"
            data-sitekey="{{ $siteKey }}"
            data-theme="{{ $theme }}"
            @if ($action) data-action="{{ $action }}" @endif>
        </div>
        @error('cf-turnstile-response')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>
@endif
