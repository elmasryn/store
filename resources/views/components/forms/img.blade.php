@php
$labelContent = $label ?? 'Image';
@endphp

<div {{ $attributes->whereStartsWith('class')->class(['form-group p-3 col-md']) }}>
    <label for="img"> {{ $labelContent }} </label>
    <input type="file" class="form-control-file @error('img') is-invalid @enderror" id="img" wire:model="img">
    @error('img')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    @if ($temp)
        <img src="{{ $temp->temporaryUrl() }}" style="width:40px;height:40px;margin-top:10px">
    @elseif (!empty($var))
        <img src="/frontend/images/{{ $var }}" style="width:40px;height:40px;margin-top:10px" />
    @endif
</div>
