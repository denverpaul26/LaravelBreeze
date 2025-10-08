@extends('layouts.portfolio')

@section('title', 'About Phone - Portfolio')

@section('content')

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Phone</h2>

        {{-- Summary paragraphs --}}
        @foreach ($portfolio['summary'] as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach

        {{-- Main Specs --}}
        @foreach ($portfolio['specs'] as $category => $details)
            <h3>{{ $category }}</h3>
            <ul class="spec-list">
                @foreach ($details as $detail)
                    @if($detail === '')
                        <li>&nbsp;</li>
                    @else
                        <li class="spec-item">{!! nl2br(e($detail)) !!}</li>
                    @endif
                @endforeach
            </ul>
            <hr>
        @endforeach

        {{-- Additional Specs --}}
        @foreach ($portfolio['additional_specs'] as $category => $details)
            <h3>{{ $category }}</h3>
            <ul class="spec-list">
                @foreach ($details as $detail)
                    <li class="spec-item">{!! nl2br(e($detail)) !!}</li>
                @endforeach
            </ul>
            <hr>
        @endforeach

    </div>

</section>

@endsection
