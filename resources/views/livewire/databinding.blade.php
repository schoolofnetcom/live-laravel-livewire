<div>
    Hello {{ $name }} <br>
    <input wire:model="name" type="text">
    <!-- <input wire:model.debounce.3000ms="name" type="text"> -->
    <!-- <input wire:model="name" type="text"> -->

    <hr>
    {{ $select }}
    <select wire:model="select">
        <option>PHP</option>
        <option>Laravel</option>
        <option>Livewire</option>
    </select>
    <hr>
    @if($show) mostrar frase @endif
    <label for="show">Mostrar</label> <br>
    <input wire:model="show" type="checkbox" id="show">

</div>
