<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Profile;
use Livewire\Component;
use App\Rules\Recaptcha;
use Illuminate\Support\Str;

class CreateProfile extends Component
{
    public $name = '';

    public $company_id = '';

    public $job_title = '';

    public $linkedin_url = '';

    public $twitter_url = '';

    public $short_bio = '';

    public $nominated_by = '';

    public $recaptchaToken = '';

    protected function rules()
    {

        return [
            'name' => ['required', 'string', 'unique:profiles', 'max:255'],
            'company_id' => ['required', 'exists:companies,id'],
            'job_title' => ['required', 'string', 'max:255'],
            'linkedin_url' => [
                'required_if:twitter_url,null',
                'nullable',
                'unique:profiles',
                'url:https',
                'regex:/^(https?:\/\/)?(www\.)?linkedin\.com\/.*$/i',
            ],
            'twitter_url' => [
                'required_if:linkedin_url,null',
                'nullable',
                'unique:profiles',
                'url:https',
                'regex:/^(https?:\/\/)?(www\.)?(twitter\.com|x\.com)\/.*$/i',
            ],
            'short_bio' => ['nullable', 'string', 'max:1500'],
            'nominated_by' => ['required', 'email:rfc,dns', 'indisposable'],
            'recaptchaToken' => ['required', new Recaptcha()],
        ];
    }

    public function save()
    {

        $validated = $this->validate();

        if (!$this->linkedin_url && !$this->twitter_url) {
            $this->addError('linkedin_url', 'Either LinkedIn or Twitter/X URL is required.');
            $this->addError('twitter_url', 'Either LinkedIn or Twitter/X URL is required.');
            return;
        }

        Profile::create([
            'name' => $validated['name'],
            'image' => "avatar-head-profile.webp",
            'company_id' => $validated['company_id'],
            'job_title' => $validated['job_title'],
            'linkedin_url' => $validated['linkedin_url'],
            'twitter_url' => $validated['twitter_url'],
            'short_bio' => $validated['short_bio'],
            'nominated_by' => $validated['nominated_by']
        ]);

        session()->flash('success', 'Profile submitted successfully!');

        return $this->redirect(request()->header('Referer'));
    }

    public function render()
    {
        $companies = Company::select('id', 'name')->get();
        return view('livewire.create-profile', compact('companies'));
    }
}
