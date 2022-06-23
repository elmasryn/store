<x-forms.form>

    <div class="row border-bottom">
        <x-forms.select wire:model="settings.ship_method" :var="$settings->ship_method"
            :options="  ['All options', 'Vendor only', 'Shipping company']  " />
        <x-forms.input wire:model="settings.ship_price_free_start" />
    </div>

    <div class="row border-bottom">
        <x-forms.input wire:model="settings.ship_price_local" />
        <x-forms.input wire:model="settings.ship_price_city" />
    </div>

</x-forms.form>
