@extends('layouts.portfolio')

@section('title', 'Testimonials - Portfolio')

@section('content')
<section id="testimonials" class="section testimonial-section">
    <div class="container">
        <h2 class="section-title">Feedback</h2>
        <div class="testimonial-cards">
            @foreach ($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-photo">
                        <img src="{{ $testimonial['photo'] }}" alt="{{ $testimonial['name'] }}">
                    </div>
                    <div class="testimonial-content">
                        <p class="testimonial-message">"{{ $testimonial['message'] }}"</p>
                        <p class="testimonial-name">{{ $testimonial['name'] }}</p>
                        <p class="testimonial-position">{{ $testimonial['position'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
