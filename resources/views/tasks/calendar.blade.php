@extends('layouts.app')

@section('title', 'Calendrier')

@section('content')

    <div id='calendar'></div>

    <script src="{{ asset('js/calendar.js') }}"></script>
@endsection

@section('scripts')
    <script>
        window.tasks = {!! $tasks->toJson() !!};
    </script>
@endsection
