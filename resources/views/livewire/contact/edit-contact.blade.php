<div>
  <form wire:submit="update" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" wire:model.blur="name" value="{{$name}}">
    <div>@error('name') {{ $message }} @enderror</div>

    <label for="email_address">Email Address</label>
    <input type="text" name="email_address" id="email_address" wire:model.blur="email_address" value="{{$email_address}}">
    <div>@error('email_address') {{ $message }} @enderror</div>

    <label for="contact">Contact</label>
    <input type="text" name="contact" id="contact" wire:model.blur="contact" value="{{$contact}}">
    <div>@error('contact') {{ $message }} @enderror</div>

    <button type="submit">Save</button>
  </form>
</div>