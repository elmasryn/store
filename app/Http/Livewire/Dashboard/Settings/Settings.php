<?php

namespace App\Http\Livewire\Dashboard\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $settings;
    public $img;
    public $showWebsiteMessage;
    public $showCommentMessage;
    public $showReviewMessage;
    public $tab = 1;

    public function mount()
    {
        $this->settings = settings();
        $this->showWebsiteMessage = $this->settings->website_status;
        $this->showCommentMessage = $this->settings->comment_status;
        $this->showReviewMessage = $this->settings->review_status;
    }

    public function render()
    {
        return view('dashboard.settings.settings')->layout('dashboard.layouts.app');
    }

    public function updated($allAttrebutes)
    {
        $this->validateOnly($allAttrebutes, $this->rules);
    }

    public function submit()
    {
        $this->validate();

        img($this->settings, $this->img);

        $this->settings->save();
        session()->flash('success', 'Settings updated successfully');
    }

    public function tab($tab)
    {
        $this->tab = $tab;
    }

    protected $rules = [
        'settings.website_name' => 'required|string|min:3|max:100',
        'settings.email' => 'nullable|email',
        'settings.description' => 'nullable|string',
        'settings.keywords' => 'nullable|string',
        'settings.multi_notification' => 'boolean',
        'settings.map_status' => 'boolean',
        'settings.tax' => 'nullable|digits_between:1,4',
        'img' => 'nullable|image|mimes:ico,bmp,gif,jp2,jpeg,jpg,jpe,png|max:2048',
        'settings.website_status' => 'boolean',
        'settings.website_message' => 'required_if:settings.website_status,false|string|min:3',
        'settings.comment_status' => 'boolean',
        'settings.comment_message' => 'required_if:settings.comment_status,false|string|min:3',
        'settings.review_status' => 'boolean',
        'settings.review_message' => 'required_if:settings.review_status,false|string|min:3',
        'settings.product_published_status' => 'boolean',
        'settings.page_published_status' => 'boolean',
        'settings.comment_published_status' => 'boolean',
        'settings.review_published_status' => 'boolean',

        'settings.ship_method' => 'nullable|in:0,1,2',
        'settings.ship_price_free_start' => 'nullable|numeric',
        'settings.ship_price_local' => 'nullable|numeric',
        'settings.ship_price_city' => 'nullable|numeric',
    ];
}
