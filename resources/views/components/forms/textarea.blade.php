@props(['cols' => '40', 'rows' => '7'])
@php
$wire = $attributes->whereStartsWith('wire:model');
$wireContent = $attributes->get('wire:model');
$id = Str::of($wireContent)->whenContains('.', fn($id) => Str::after($id, '.'));
$labelContent = $label ?? Str::of(ucfirst($id))->whenContains('_', fn($labelContent) => strtr($labelContent, '_', ' '));
@endphp

<div {{ $attributes->whereStartsWith('class')->class(['form-group p-3 col-md']) }}>
    <label for="{{ $id }}"> {{ $labelContent }} </label>
    <textarea class="form-control @error($wireContent) is-invalid @enderror" cols="{{ $cols }}" rows="{{ $rows }}" id="{{ $id }}"
        {{ $wire }}></textarea>
    @error($wireContent)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>