@php
$wire = $attributes->whereStartsWith('wire:model');
$event = $attributes->whereStartsWith('wire:click');
$id = Str::of($attributes->get('wire:model'))->whenContains('.', fn($id) => Str::after($id, '.'));
$labelContent = $label ?? Str::of(ucfirst($id))->whenContains('_', fn($labelContent) => strtr($labelContent, '_', ' '));
@endphp

<div {{ $attributes->whereStartsWith('class')->class(['form-group p-3 col-md']) }}>
    <label for="{{ $id }}"> {{ $labelContent }} </label>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="{{ $id }}" {{ $wire }}
            {{ $event }} @checked($var == true)>
        <label class="custom-control-label" for="{{ $id }}"></label>
    </div>
</div>
