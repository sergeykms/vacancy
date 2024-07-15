@props(['active' => false,
'type' => 'link'
])

@if($type === 'button')
    <a {{ $attributes }}
       class="{{$active ? 'btn btn-outline-light me-3 active' : 'btn btn-outline-light me-3'}}"
       style="width: 5rem">{{ $slot }}</a>
@else
    <a {{ $attributes }}
       class="{{$active ? 'nav-link me-3 active' : 'nav-link me-3'}}"
       style="width: 5rem">{{ $slot }}</a>
@endif



