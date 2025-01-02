<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    @for ($chunk = 0; $chunk < $page; $chunk++)
        {{-- untuk check array chunk --}}
        {{-- {{ var_dump($chunks[$chunk]) }} --}}

        <livewire:post-chunk :ids="$chunks[$chunk]" :key="$chunk" />
    @endfor

    {{-- @if ($this->hasMorePages())
        <button wire:click="loadMore">Load More</button>
    @endif --}}

    @if ($this->hasMorePages())
    {{-- class css translate tu untuk sorakkan div bagi nampak smooth --}}
        <div class="-translate-y-32" x-intersect="$wire.loadMore"></div>
    @endif
</div>
