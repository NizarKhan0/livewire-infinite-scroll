<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

        <div class="max-w-2xl mx-auto my-12 space-y-8">
            @foreach ($posts as $post)
            <div>
                <h2 class="text-3xl font-bold">{{ $post->id }}: {{ $post->title }}</h2>
                <p class="mt-2 text-lg">{{ $post->teaset }} </p>
            </div>
            @endforeach
        </div>

</div>
