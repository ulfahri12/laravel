@props(['messages'])

@if ($messages)
    <ul style="list-style: none; font-size: small; color: red; font-weight: bold; align-items: start; display: flex; justify-content: start;">
        <li>Usernamae atau password salah</li>
    </ul>
@endif
