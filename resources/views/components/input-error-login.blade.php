@props(['messages'])

@if ($messages)
    <ul style="position: absolute; top: 110%; left: 0; list-style: none; font-size: small; color: red; font-weight: bold; align-items: start; display: flex; justify-content: start;">
        <li>Username atau password salah</li>
    </ul>
@endif
