<div x-data="{ count: 0 }">
    {{-- <h1>{{ $count }}</h1> --}}

    <button x-on:click="count--">Decrement</button>
    <span x-text="count"></span>
    <button x-on:click="count++">Increment</button>
    {{-- <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button> --}}
</div>
