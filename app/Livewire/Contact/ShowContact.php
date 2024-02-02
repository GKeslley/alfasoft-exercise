<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use App\Models\Contact;

class ShowContact extends Component
{
    public Contact $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact.show-contact');
    }
}