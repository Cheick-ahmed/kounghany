@extends('layouts.app')

@section('content')
    <h4 class="text-white text-5xl italic mt-40 mb-20">Tous les événements</h4>
    @for($i = 0; $i < 6; $i++)
        @include('partials.events.event')
    @endfor
@endsection
