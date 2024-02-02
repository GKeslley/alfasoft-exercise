<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;
use App\Repositories\Eloquents\ContactRepository;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class EditContact extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $contact = '';
    #[Validate]
    public string $email_address = '';
    public Contact $contactModel;

    public function mount(Contact $contact)
    {
        if (!Auth::check()) {
            $this->skipRender();
            $this->redirectRoute('account.login');
        }
        $this->contactModel = $contact;
        if ($contact) {
            $this->fill(
                $contact->only('name', 'contact', 'email_address')
            );
        }
    }

    public function rules()
    {
        return [
            'name' => 'bail|required|min:5|max:255',
            'email_address' => 'bail|required|email|unique:contacts,email_address,'.$this->contactModel->id,
            'contact' => 'required|digits:9|regex:/^([0-9\s\-\+\(\)]*)$/|unique:contacts,contact,'.$this->contactModel->id
        ];
    }

    public function messages() 
    {
        return [
            'contact.regex' => 'The field must be a valid phone number',
        ];
    }

    public function update(ContactRepository $repository)
    {
        $validated = $this->validate();
        $repository->update($this->contactModel, $validated);
        session()->flash('status', 'Contact successfully updated.');
        $this->redirectRoute('index');
    }

    public function render()
    {
        return view('livewire.contact.edit-contact');
    }
}