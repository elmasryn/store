<form wire:submit.prevent="submit">
    <div class="row border-bottom">
        <div class="form-group p-3 col-md-6">
            <label for="website_name"> Website name </label>
            <input id="website_name" type="text"
                class="form-control @error('settings.website_name') is-invalid @enderror"
                wire:model="settings.website_name">
            @error('settings.website_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group p-3 col-md-6">
            <label for="email"> Email </label>
            <input type="email" id="email" class="form-control @error('settings.email') is-invalid @enderror"
                wire:model="settings.email">
            @error('settings.email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row border-bottom">
        <div class="form-group p-3 col-md-6">
            <label for="desc"> Description </label>
            <textarea id="desc" class="form-control
            @error('settings.desc') is-invalid @enderror"
                wire:model="settings.desc" cols="40" rows="7"></textarea>
            @error('settings.desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group p-3 col-md-6">
            <label for="keywords"> Keywords </label>
            <textarea id="keywords" class="form-control @error('settings.keywords') is-invalid @enderror"
                wire:model="settings.keywords" cols="40" rows="7"></textarea>
            @error('settings.keywords')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.multi_notification" :var="$settings->multi_notification"
            content='Allow for users to choose with multi notification' />

        <x-forms.switch wire:model="settings.map_status" :var="$settings->map_status" content='Map stutus' />
    </div>


    <div class="row border-bottom">
        <div class="form-group p-3 col-md-6">
            <label for="tax"> tax % </label>
            <input type="tax" id="tax" class="form-control @error('settings.tax') is-invalid @enderror"
                wire:model="settings.tax">
            @error('settings.tax')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group p-3 col-md-6">
            <label for="img"> Website icon </label>
            <input type="file" id="img" class="form-control-file @error('img') is-invalid @enderror"
                wire:model="img" aria-describedby="fileHelpId" style="width: fit-content">
            @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @if ($img)
                <img src="{{ $img->temporaryUrl() }}" style="width:40px;height:40px;margin-top:10px">
            @elseif (!empty($settings->img))
                <img src="/frontend/images/{{ $settings->img }}" style="width:40px;height:40px;margin-top:10px" />
            @endif
        </div>
    </div>


    <div class="form-group row border-bottom">
        <x-forms.switch wire:model="settings.website_status" :var="$settings->website_status"
            wire:click="$toggle('showWebsiteMessage')" content='Website status' />

        <div class="p-3 col-md-6 website_message {{ $showWebsiteMessage == true ? 'd-none' : '' }}">
            <label for="website_message"> Message for closed website </label>
            <textarea id="website_message" class="form-control @error('settings.website_message') is-invalid @enderror"
                wire:model="settings.website_message" cols="40" rows="3">{{ $settings->website_message }}</textarea>
            @error('settings.website_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row border-bottom">
        <x-forms.switch wire:model="settings.comment_status" :var="$settings->comment_status"
            wire:click="$toggle('showCommentMessage')" content="Comment status" />

        <div class="p-3 col-md-6 comment_message {{ $showCommentMessage == true ? 'd-none' : '' }}">
            <label for="comment_message"> Message for closed comment </label>
            <textarea id="comment_message" class="form-control @error('settings.comment_message') is-invalid @enderror"
                wire:model="settings.comment_message" cols="40" rows="3">{{ $settings->comment_message }}</textarea>
            @error('settings.comment_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row border-bottom">
        <x-forms.switch wire:model="settings.review_status" :var="$settings->review_status" wire:click="$toggle('showReviewMessage')"
            content="Review status" />

        <div class="p-3 col-md-6 review_message {{ $showReviewMessage == true ? 'd-none' : '' }}">
            <label for="review_message"> Message for closed review </label>
            <textarea id="review_message" class="form-control @error('settings.review_message') is-invalid @enderror"
                wire:model="settings.review_message" cols="40" rows="3">{{ $settings->review_message }}</textarea>
            @error('settings.review_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row border-bottom">
        <x-forms.switch wire:model="settings.product_published_status" :var="$settings->product_published_status"
            content="Do you want to make products will be published automatically without approved ?" />

        <x-forms.switch wire:model="settings.page_published_status" :var="$settings->page_published_status"
            content="Do you want to make pages will be published automatically without approved ?" />

        <x-forms.switch wire:model="settings.comment_published_status" :var="$settings->comment_published_status"
            content="Do you want to make comments will be published automatically without approved ?" />

        <x-forms.switch wire:model="settings.review_published_status" :var="$settings->review_published_status"
            content="Do you want to make reviews will be published automatically without approved ?" />
    </div>


    <div class="form-group p-3">
        <button type="submit" class="btn btn-primary"> Submit </button>
    </div>
</form>
