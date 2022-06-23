<x-forms.form>

    <div class="row border-bottom">
        <x-forms.input wire:model="settings.website_name" />
        <x-forms.input wire:model="settings.email" />
    </div>

    <div class="row border-bottom">
        <x-forms.textarea wire:model="settings.description" />
        <x-forms.textarea wire:model="settings.keywords" />
    </div>

    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.multi_notification" :var="$settings->multi_notification"
            label="Allow for users to choose with multi notification" />
        <x-forms.switch wire:model="settings.map_status" :var="$settings->map_status" />
    </div>

    <div class="row border-bottom">
        <x-forms.input wire:model="settings.tax" label="Tax %" />
        <x-forms.img :temp="$img" :var="$settings->img" label="Website icon" />
    </div>

    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.website_status" :var="$settings->website_status"
            wire:click="$toggle('showWebsiteMessage')" />
        <x-forms.textarea wire:model="settings.website_message" rows="3"
            class="{{ $showWebsiteMessage == true ? 'd-none' : '' }}" label="Message for closed website" />
    </div>

    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.comment_status" :var="$settings->comment_status"
            wire:click="$toggle('showCommentMessage')" />
        <x-forms.textarea wire:model="settings.comment_message" rows="3"
            class="{{ $showCommentMessage == true ? 'd-none' : '' }}" label="Message for closed comment" />
    </div>

    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.review_status" :var="$settings->review_status"
            wire:click="$toggle('showReviewMessage')" />
        <x-forms.textarea wire:model="settings.review_message" rows="3"
            class="{{ $showReviewMessage == true ? 'd-none' : '' }}" label="Message for closed review" />
    </div>

    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.product_published_status" :var="$settings->product_published_status"
            label="Do you want to make products will be published automatically without approved ?" />
        <x-forms.switch wire:model="settings.page_published_status" :var="$settings->page_published_status"
            label="Do you want to make pages will be published automatically without approved ?" />
        <x-forms.switch wire:model="settings.comment_published_status" :var="$settings->comment_published_status"
            label="Do you want to make comments will be published automatically without approved ?" />
        <x-forms.switch wire:model="settings.review_published_status" :var="$settings->review_published_status"
            label="Do you want to make reviews will be published automatically without approved ?" />
    </div>

</x-forms.form>
