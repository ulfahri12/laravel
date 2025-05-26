@php
$classes = 'btn btn-default btn-flat float-end';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>