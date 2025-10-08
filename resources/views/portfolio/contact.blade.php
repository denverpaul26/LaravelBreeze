@extends('layouts.portfolio')

@section('title', 'Contact - Place Your Order')

@section('content')
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Place Your Order</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('portfolio.contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-light">Full Name *</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-light">Email Address *</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label text-light">Phone Number (optional)</label>
                <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" 
                       value="{{ old('phone') }}">
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label text-light">Order Details *</label>
                <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send Order</button>
        </form>
    </div>
</section>
@endsection
