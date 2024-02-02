<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\Contact;

class ShowContacts extends Component
{

    #[Computed]
    public function contacts()
    {
        return Contact::all();
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
    }

    public function render()
    {
        return view('livewire.contact.show-contacts');
    }
}