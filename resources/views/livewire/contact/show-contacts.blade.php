<section class="justify-self-center mb-5">
  <table class="table-auto border-separate border-spacing-2 border border-slate-400">
    <thead>
      <tr>
        <th class="border border-slate-300">Name</th>
        <th class="border border-slate-300">Email Address</th>
        <th class="border border-slate-300">Contact</th>
        <th class="border border-slate-300">Edit</th>
        <th class="border border-slate-300">Delete</th>
      </tr>
    </thead>
    @foreach($this->contacts as $contact)
    <tbody>
      <tr>
        <td class="border border-slate-300">
          <a href="/contacts/{{$contact->id}}" wire:navigate class="underline underline-offset-3">{{$contact->name}}</a>
        </td>
        <td class="border border-slate-300">{{$contact->email_address}}</td>
        <td class="border border-slate-300">{{$contact->contact}}</td>
        <td class="border border-slate-300 p-2">
          <a href="/contacts/{{$contact->id}}/edit" wire:navigate class="p-1 rounded-md bg-yellow-500 block text-white font-semibold">Edit</a>
        </td>
        <td class="border border-slate-300">
          <button type="button" wire:confirm="Are you sure you want to delete this contact?" wire:click="delete({{ $contact->id }})" class="p-1 rounded-md bg-red-500 block text-white font-semibold">
            Delete
          </button>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

  @if (session('status'))
  <div class="fixed right-4 bottom-4 bg-green-500 text-white font-bold px-2 py-4 rounded-md">
    <p>
      {{ session('status') }}
    </p>
  </div>
  @endif
</section>