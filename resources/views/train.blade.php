@extends('layouts.app')

@section('content')
    <h1>Welcome to laravel</h1>
    <ul>
        @foreach ($trains as $train)

        {{-- Non avendo inserito date, ho optato per un'intervallo orario --}}
            @if ($train->departure_time < '05:00:00' || $train->departure_time > '12:00:00')
                @continue
            @endif

            <ul>
                <li>{{ $train->company }}</li>
                <li>{{ $train->train_code }}</li>
                <li>{{ $train->departure_time }}</li>
                <hr>
            </ul>
        @endforeach
    </ul>
@endsection
