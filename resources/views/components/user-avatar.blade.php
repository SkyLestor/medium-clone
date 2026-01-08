@props(['user', 'size' => 'w-14 h-14'])

@if($user->imageUrl())
    <img class="{{ $size }} rounded-full" src="{{ $user->imageUrl() }}"
         alt="{{ $user->name }}">
@else
    <img src="/dummy_avatar.png" class="{{ $size }} rounded-full" alt="Dummy avatar">
@endif
