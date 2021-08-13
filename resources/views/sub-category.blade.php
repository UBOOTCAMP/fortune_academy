@extends('layouts.app')
@section('title') {{ $subCategory->title }} | Fortune Academy @endsection
@section('content')
    <section class="counterUp_wrapper__block padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"><strong>{{ $subCategory->category->title }}</strong></h1>
                    <h2 class="text-center"><strong>{{ $subCategory->title }}</strong></h2>
                </div>
            </div>
        </div>
    </section>

    <section class="subCategories">
        <div class="container mt-10">
            <div class="row">
                @forelse($subCategory->classes->sortBy('month') as $class)
                    <div class="col-12 col-md-6">
                        @php
                            $monthName = date('F', mktime(0, 0, 0, $class->month, 10));
                        @endphp
                        <h3 class="text-center text-uppercase">{{ $monthName }}</h3>
                        @if ($class->promo)
                            @foreach($class->promo as $promo)
                                @if ($promo->type == 'percentage')
                                    <div class="offer-tag">{{ number_format($promo->amount) }}% Off !</div>
                                @else
                                    <div class="offer-tag">$ {{ $promo->amount }} Off !</div>
                                @endif
                            @endforeach
                        @endif
                        <div class="card">
                            <img src="{{ $class->getImagePath($class->image)  }}" class="float-left padding-20"
                                 style="height: 250px; max-width: 200px;" alt="{{ $class->class_name }}">
                            <div class="card-body padding-20">
                                <h4 class="card-title">{{ $class->class_name }}</h4>
                                <h6 class="mb-2">Class Code: {{ $class->class_code }}</h6>
                                <h6 class="mb-2">Days: {{ $class->days }}</h6>
                                <h6 class="mb-2">Timing: {{ $class->timing}}</h6>
                                <h6 class="mb-2">Price: ${{ $class->price }}</h6>
                                <h6 class="mb-2">Start Date: {{ $class->start_date}}</h6>
                                <h6 class="mb-2">End Date: {{ $class->end_date}}</h6>
                                <h6 class="card-text">Location: {{ $class->sub_category->category->title}}</h6>
                                <a class="btn register float-right mb-20" target="_blank"
                                   href="{{ route('enrollClass', $class->id) }}">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <h2>No Classes Found!</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
