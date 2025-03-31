<div>
    {{ $angka}}
    <button wire:click="tambah">+</button>
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
    <!-- Declare a JavaScript object of data... -->
    <div x-data="{ count: 0 }">
        <!-- Render the current "count" value inside an element... -->
        <h2 x-text="count"></h2>

        <!-- Increment the "count" value by "1" when a click event is dispatched... -->
        <button x-on:click="count++">+</button>
    </div>
</div>