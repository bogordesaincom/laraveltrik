<div class="flex flex-col mb-4">
    

    <h2 class="text-xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 font-extrabold"
        >{{ $post->title }}</a>
    </h2>
    <p class="text-gray-400 font-normal text-xs mb-2 -mt-2">
        {{ $post->getDate()->format('j F Y') }}
    </p>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

</div>
