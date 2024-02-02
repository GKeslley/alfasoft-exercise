<?php

namespace App\Repositories\Contracts;
use App\Models\Contact;

interface ContactRepositoryInterface
{
  public function store(array $data);
  public function update(Contact $contact, array $data);
}