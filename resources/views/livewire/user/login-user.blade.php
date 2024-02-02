<div>
  <form wire:submit="login" method="post">
    @csrf

    <label for="email">Email</label>
    <input type="text" name="email" id="email" wire:model.blur="email">
    <div>@error('email') {{ $message }} @enderror</div>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" wire:model.blur="password">
    <div>@error('password') {{ $message }} @enderror</div>

    <button type="submit">Log In</button>
  </form>

  @if (session('error'))
  <div>
    <p>{{session('error')}}</p>
  </div>
  @endif
</div>