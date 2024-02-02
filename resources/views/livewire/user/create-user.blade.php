<div>
  <form wire:submit="save" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" wire:model.blur="name">
    <div>@error('name') {{ $message }} @enderror</div>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" wire:model.blur="email">
    <div>@error('email') {{ $message }} @enderror</div>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" wire:model.blur="password">
    <div>@error('password') {{ $message }} @enderror</div>

    <button type="submit">Create</button>
  </form>
</div>