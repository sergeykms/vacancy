@props([
'type' => 'link'
])

@if($type === 'link')
    <a {{ $attributes }} class="btn btn-primary" style="font-family: var(--navigateFontFamily),sans-serif; font-size: 1.3rem; align-self: center">{{ $slot }}</a>
@else
    <button class="btn btn-primary" style="font-family: var(--navigateFontFamily),sans-serif; font-size: 1.3rem; align-self: center">{{ $slot }}</button>
@endif



