<form wire:submit.prevent="submit">
    <div class="row">
        <div class="form-group border-bottom p-3 col-md-6">
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

        <div class="form-group border-bottom p-3 col-md-6">
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


    <div class="row">
        <div class="form-group border-bottom p-3 col-md-6">
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

        <div class="form-group border-bottom p-3 col-md-6">
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


    <div class="row">
        <div class="form-group border-bottom p-3 col-md-6">
            <label for="multi_notification"> Allow for users to choose with multi notification </label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="multi_notification"
                    wire:model="settings.multi_notification" @checked($settings?->multi_notification == true)>
                <label class="custom-control-label" for="multi_notification"></label>
            </div>
        </div>

        <div class="form-group border-bottom p-3 col-md-6">
            <label for="map_status"> Map status </label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="map_status" wire:model="settings.map_status"
                    @checked($settings?->map_status == true)>
                <label class="custom-control-label" for="map_status"></label>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="form-group border-bottom p-3 col-md-6">
            <label for="tax"> tax % </label>
            <input type="tax" id="tax" class="form-control @error('settings.tax') is-invalid @enderror"
                wire:model="settings.tax">
            @error('settings.tax')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group border-bottom p-3 col-md-6">
            <label for="img"> Website icon </label>
            <input type="file" id="img" class="form-control-file @error('img') is-invalid @enderror" wire:model="img"
                aria-describedby="fileHelpId" style="width: fit-content">
            @error('img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            @if ($img)
                <img src="{{ $img->temporaryUrl() }}" style="width:40px;height:40px;margin-top:10px">
            @elseif (!empty($settings?->img))
                <img src="/frontend/images/{{ $settings->img }}" style="width:40px;height:40px;margin-top:10px" />
            @endif
        </div>
    </div>


    <div class="form-group row border-bottom">
        <div class="p-3 col-md-6">
            <label for="website_status">website status</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="website_status"
                    wire:model="settings.website_status" wire:click="$toggle('showWebsiteMessage')"
                    @checked($settings?->website_status == true)>
                <label class="custom-control-label" for="website_status"></label>
            </div>
        </div>

        <div class="p-3 col-md-6 website_message {{ $showWebsiteMessage == true ? 'd-none' : '' }}">
            <label for="website_message"> Message for closed website </label>
            <textarea id="website_message" class="form-control @error('settings.website_message') is-invalid @enderror"
                wire:model="settings.website_message" cols="40" rows="3">{{ $settings?->website_message }}</textarea>
            @error('settings.website_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row border-bottom">
        <div class="p-3 col-md-6">
            <label for="comment_status">comment status</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="comment_status"
                    wire:model="settings.comment_status" wire:click="$toggle('showCommentMessage')"
                    @checked($settings?->comment_status == true)>
                <label class="custom-control-label" for="comment_status"></label>
            </div>
        </div>

        <div class="p-3 col-md-6 comment_message {{ $showCommentMessage == true ? 'd-none' : '' }}">
            <label for="comment_message"> Message for closed comment </label>
            <textarea id="comment_message" class="form-control @error('settings.comment_message') is-invalid @enderror"
                wire:model="settings.comment_message" cols="40" rows="3">{{ $settings?->comment_message }}</textarea>
            @error('settings.comment_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row border-bottom">
        <div class="p-3 col-md-6">
            <label for="review_status">review status</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="review_status"
                    wire:model="settings.review_status" wire:click="$toggle('showReviewMessage')"
                    @checked($settings?->review_status == true)>
                <label class="custom-control-label" for="review_status"></label>
            </div>
        </div>

        <div class="p-3 col-md-6 review_message {{ $showReviewMessage == true ? 'd-none' : '' }}">
            <label for="review_message"> Message for closed review </label>
            <textarea id="review_message" class="form-control @error('settings.review_message') is-invalid @enderror"
                wire:model="settings.review_message" cols="40" rows="3">{{ $settings?->review_message }}</textarea>
            @error('settings.review_message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row">
        <div class="form-group border-bottom p-3 col-md-3">
            <label for="product_published_status">Do you want to make products will be published automatically without
                approved ?</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="product_published_status"
                    wire:model="settings.product_published_status" @checked($settings?->product_published_status == true)>
                <label class="custom-control-label" for="product_published_status"></label>
            </div>
        </div>

        <div class="form-group border-bottom p-3 col-md-3">
            <label for="page_published_status">Do you want to make pages will be published automatically without
                approved ?</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="page_published_status"
                    wire:model="settings.page_published_status" @checked($settings?->page_published_status == true)>
                <label class="custom-control-label" for="page_published_status"></label>
            </div>
        </div>

        <div class="form-group border-bottom p-3 col-md-3">
            <label for="comment_published_status">Do you want to make comments will be published automatically without
                approved ?</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="comment_published_status"
                    wire:model="settings.comment_published_status" @checked($settings?->comment_published_status == true)>
                <label class="custom-control-label" for="comment_published_status"></label>
            </div>
        </div>

        <div class="form-group border-bottom p-3 col-md-3">
            <label for="review_published_status">Do you want to make reviews will be published automatically without
                approved ?</label>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="review_published_status"
                    wire:model="settings.review_published_status" @checked($settings?->review_published_status == true)>
                <label class="custom-control-label" for="review_published_status"></label>
            </div>
        </div>
    </div>

    <div class="form-group border-bottom p-3">
        <button type="submit" class="btn btn-primary"> Submit </button>
    </div>
</form>
