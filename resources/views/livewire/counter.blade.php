<div x-data="{ count: 0 }">
    {{-- <h1>{{ $count }}</h1> --}}

    <button x-on:click="count--" class="rounded-lg bg-orange-500 px-4 py-2 text-neutral-100">Decrement</button>
    <span x-text="count"></span>
    <button x-on:click="count++" class="rounded-lg bg-orange-500 px-4 py-2 text-neutral-100">Increment</button>
    {{-- <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button> --}}
</div>
