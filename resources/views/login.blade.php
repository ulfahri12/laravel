<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <div class="container">
      <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="form-box admin">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <img src="{{ asset('img/man.png') }}" alt="admin" height="100" width="100">
                <h1>Karyawan</h1>
                <div class="input-box">
                    <x-input-error-login :messages="$errors->get('email')" class="mt-2" />
                    {{-- <input type="email" name="email" id="email" autofocus
                        autocomplete="username" placeholder="Username" required /> --}}
                    <input id="email" type="email" name="email" required autofocus autocomplete="username" :value="old('email')" placeholder="Username" />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" autocomplete="current-password"
                        placeholder="Password" required />
                    <i class="bx bxs-lock-alt"></i>
                    <x-input-error-login :messages="$errors->get('password')" class="mt-2" />
                </div><br>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>


        <div class="form-box karyawan">
            <form action="">
              <img src="{{ asset('img/profile.png') }}" alt="karyawan" height="100" width="100">
                <h1>Owner</h1>
                <div class="input-box">
                    <input type="text" name="" id="" placeholder="Username" required />
                    <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="" id="" placeholder="Password" required />
                    <i class="bx bxs-lock-alt"></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <br>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>


        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Selamat Datang!!</h1>
                <p>Klik tombol dibawah untuk ganti user!</p>
                <div class="arrow">
                <img src="{{ asset('img/arrow.png') }}" alt="..." height="30" />
                </div>
                <button class="btn karyawan-btn">Owner</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Selamat Datang Boss!</h1>
                <p>Klik tombol dibawah untuk ganti user!</p>
                <div class="arrow">
                  <img src="{{ asset('img/arrow.png') }}" alt="..." height="30" />
                  </div>
                <button class="btn admin-btn">Karywan</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>
