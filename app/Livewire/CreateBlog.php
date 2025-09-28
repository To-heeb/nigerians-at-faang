<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Blog;
use Livewire\Component;
use App\Rules\Recaptcha;
use Illuminate\Support\Str;

class CreateBlog extends Component
{
    public $name = '';

    public $blog_post = '';

    public $submitted_by = '';

    public $recaptchaToken = '';

    protected function rules()
    {

        return [
            'name' => ['required', 'string', 'max:255'],
            'blog_post' => ['required', 'string', 'min:500', 'max:2000'],
            'submitted_by' => ['required', 'email:rfc,dns', 'indisposable'],
            'recaptchaToken' => ['required', new Recaptcha()],
        ];
    }

    public function save()
    {

        $validated = $this->validate();
        $title = "New Blog By" . $validated['submitted_by'] . " just added " . rand(1000, 30000000);
        $image = "blog-image-" . rand(1, 13) . "jpg";

        Blog::create([
            'title'             =>      $title,
            'slug'              =>      Str::slug($title),
            'image'             =>      $image,
            'body'              =>      $validated['blog_post'],
            'author'            =>      $validated['name'],
            'submitted_by'      =>      $validated['submitted_by'],
        ]);

        session()->flash('success', 'Post submitted successfully!');

        return $this->redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.create-blog');
    }
}
