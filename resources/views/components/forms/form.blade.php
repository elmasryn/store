@php
$labelContent = $label ?? 'Submit';
@endphp

<form wire:submit.prevent="submit">

    {{ $slot }}

    <div class="form-group p-3">
        <button type="submit"{{ $attributes->whereStartsWith('class')->class(['btn btn-primary']) }}>
            {{ $labelContent }}
            <span wire:loading class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="sr-only">Loading...</span>
        </button>
    </div>
</form>
