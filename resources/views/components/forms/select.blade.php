@php
$wire = $attributes->whereStartsWith('wire:model');
$wireContent = $attributes->get('wire:model');
$id = Str::of($attributes->get('wire:model'))->whenContains('.', fn($id) => Str::after($id, '.'));
$labelContent = $label ?? Str::of(ucfirst($id))->whenContains('_', fn($labelContent) => strtr($labelContent, '_', ' '));
@endphp

<div {{ $attributes->whereStartsWith('class')->class(['form-group p-3 col-md']) }}>
    <label for="{{ $id }}"> {{ $labelContent }} </label>
    <select class="custom-select @error($wireContent) is-invalid @enderror" id="{{ $id }}" {{ $wire }}>
        @foreach ($options as $value => $content)
            <option value="{{$value}}" @selected($var === $value)> {{$content}} </option>
        @endforeach
    </select>
    @error($wireContent)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
