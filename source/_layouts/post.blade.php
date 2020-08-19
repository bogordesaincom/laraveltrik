@extends('_layouts.master')

@php
    $page->type = 'article';
@endphp

@section('body')

    <h1 class="leading-tight font-black text-3xl mb-2">{{ $page->title }}</h1>

    <p class="text-gray-700 text-base md:mt-0">{{ $page->author }}  •  {{ date('j F Y', $page->date) }}</p>

    @if ($page->categories)
        Tags : 
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block leading-loose tracking-wide text-orange-500 capitalize text-xs font-bold mr-4 mb-4"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base font-black">
        <div>
            @if ($next = $page->getNext())
                <a class="font-black" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a class="font-black" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
