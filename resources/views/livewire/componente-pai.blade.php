<div>
    <h2>Componente PAI</h2>
    @foreach($users as $user)
        @livewire('componente-filho', ['user' => $user], key($user->name))
    @endforeach

    <hr>
    {{ now() }}
    <button wire:click="$refresh">Refresh pai</button>
    {{-- <button wire:click="refreshChildren">Refresh filho</button> --}}
    <button wire:click="$emit('refreshChildren')">Refresh filho</button>
</div>
