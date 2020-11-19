<div>
    <h2>Actions</h2>

    {{ var_dump($boolean) }}
    {{--  <button wire:click="changeStatus">Click True</button>
    <button wire:click="$set('boolean', false )">Set false</button>
    <button wire:click="$toggle('boolean')">Toggle</button> --}}
    <button wire:mouseleave="$toggle('boolean')">Toggle</button>
</div>
