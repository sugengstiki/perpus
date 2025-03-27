<div>

    <label>Nama:</label>
    <input type="text" wire:model.live="name">

    @if (session()->has('message'))
    <p style="color: green;">{{ session('message') }}</p>
    @endif


    <h3>Preview:</h3>
    <p>Nama: {{ $name }}</p>
    <p>Email: {{ $email }}</p>

</div>