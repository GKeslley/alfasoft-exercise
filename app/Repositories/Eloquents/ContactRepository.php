<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
  public function store(array $data) 
  {
    $contractCreated = Contact::create($data);
    return $contractCreated;
  }

  public function update(Contact $contact, array $data)
  {
    return $contact->update($data);
  }
  
}