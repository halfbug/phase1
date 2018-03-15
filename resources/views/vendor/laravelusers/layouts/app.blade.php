@extends('layouts.admin')

@section('content')
@yield('content')
@endsection

@section('script')
    {{-- Scripts --}}
    @if(config('laravelusers.enablejQueryCdn'))
        <script src="{{ asset(config('laravelusers.jQueryCdn')) }}"></script>
    @endif
    @if(config('laravelusers.enableBootstrapPopperJsCdn'))
        <script src="{{ asset(config('laravelusers.bootstrapPopperJsCdn')) }}"></script>
    @endif
    @if(config('laravelusers.enableBootstrapJsCdn'))
        <script src="{{ asset(config('laravelusers.bootstrapJsCdn')) }}"></script>
    @endif
    @if(config('laravelusers.enableAppJs'))
        <script src="{{ asset(config('laravelusers.appJsPublicFile')) }}"></script>
        @endif
        @include('laravelusers::scripts.toggleText')

        @yield('template_scripts')
@endsection

