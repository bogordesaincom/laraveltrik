@extends('_layouts.master')

@section('body')
    <h1 class="text-3xl">{{ $page->title }}</h1>

    <div class="text-base border-b border-blue-200 mb-2">
        @yield('content')
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="w-full border-b border-gray-100 mt-2 mb-4">
        @endif
    @endforeach

    {{-- @include('_components.newsletter-signup') --}}
@stop
