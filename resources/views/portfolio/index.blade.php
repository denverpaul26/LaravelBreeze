@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container hero-container">
        <div class="hero-image">
            <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        </div>
        <div class="hero-text">
            <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>
            <p class="lead mb-4">{{ $portfolio['Subtitle'] }}</p>
        </div>
    </div>
</section>

@endsection