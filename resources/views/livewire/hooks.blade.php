<div>
    <h2>Lifecycle Hooks</h2>
    <input wire:model="name" type="text">
    <input wire:model="lastname" type="text">
    <hr>
    @if($hydrate)  {{ $hydrate }}  @endif <br>
    @if($updated)  {{ $updated }} @endif <br>
    @if($updating) {{ $updating }}  @endif <br>
    @if($newName) {{ $newName }}  @endif <br>
</div>
