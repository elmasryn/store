<?php

namespace App\Http\Livewire\Dashboard\Setting;

use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{
    use WithFileUploads;

    public $settings;
    public $img;
    public $showWebsiteMessage;
    public $showCommentMessage;
    public $showReviewMessage;

    public function mount()
    {
        $this->settings = settings();
        $this->showWebsiteMessage = $this->settings->website_status;
        $this->showCommentMessage = $this->settings->comment_status;
        $this->showReviewMessage = $this->settings->review_status;
    }

    public function render()
    {
        return view('dashboard.setting.setting')->layout('dashboard.layouts.app');
    }

    public function updated($allAttrebutes)
    {
        $this->validateOnly($allAttrebutes, $this->rules);
    }

    public function submit()
    {
        $this->validate();
        $this->settings->save();
        session()->flash('success', 'Settings updated successfully');
    }

    protected $rules = [
        'settings.website_name' => 'required|string|min:3|max:100',
        'settings.email' => 'nullable|email',
        'settings.desc' => 'nullable|string',
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
    ];
}
