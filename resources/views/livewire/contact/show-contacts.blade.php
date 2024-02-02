<div>
  <ul>
    @foreach($this->contacts as $contact)
    <li>
      <a href="/contacts/{{$contact->id}}" wire:navigate class="text-3xl font-bold">{{$contact->name}}</a>
    </li>
    <li>{{$contact->contact}}</li>
    <li>{{$contact->email_address}}</li>
    <li>
      <a href="/contacts/{{$contact->id}}/edit" wire:navigate>Edit</a>
    </li>
    <li>
      <button type="button" wire:confirm="Are you sure you want to delete this contact?" wire:click="delete({{ $contact->id }})">
        Delete
      </button>
    </li>

    @endforeach
  </ul>

  <div>
    @if (session('status'))
    <div>
      {{ session('status') }}
    </div>
    @endif
  </div>

</div>