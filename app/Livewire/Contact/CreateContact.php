<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;
use App\Repositories\Eloquents\ContactRepository;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateContact extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $contact = '';
    #[Validate]
    public string $email_address = '';

    public function mount()
    {
        if (!Auth::check()) {
            $this->skipRender();
            $this->redirectRoute('account.login');
        }
    }

    public function rules()
    {
        return [
            'name' => 'bail|required|min:5|max:255',
            'email_address' => 'bail|required|email|unique:contacts',
            'contact' => 'required|digits:9|regex:/^([0-9\s\-\+\(\)]*)$/|unique:contacts'
        ];
    }

    public function messages() 
    {
        return [
            'contact.regex' => 'The field must be a valid phone number',
        ];
    }

    public function save(ContactRepository $repository)
    {
        $validated = $this->validate();
        $contact = $repository->store($validated);
        $this->reset(['name', 'contact', 'email_address']); 
    }

    public function render()
    {
        return view('livewire.contact.create-contact');
    }
}