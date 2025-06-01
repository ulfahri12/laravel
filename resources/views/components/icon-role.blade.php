@props(['icon', 'name'])

<img src="{{ asset('img/'.$icon) }}" class="user-image rounded-circle shadow" alt="User Image" />
<span class="d-none d-md-inline">{{ $name }}</span>
