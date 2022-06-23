{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.custom-login')

@section('content')

<div class="page-content">
    <div class="form-v10-content">
    <center>
    <img class="logo" src="https://cdn.discordapp.com/attachments/785538389566029844/975900557254492180/Logo.png" alt="BankMini Logo" />
    </center>
        <form class="form-detail" action="{{ route('login') }}" method="POST" id="myform" >
            @csrf
            <div class="form-left">
                <h2>Halo,<br>selamat datang!</h2>
                {{-- Input Email --}}
                <div class="form-group">
                    <div class="form-row form-row-1">
                        {{-- <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" placeholder="Masukkan Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        <p style="margin-left: 20px">
                        </p> --}}
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- Input Password --}}
                    <div class="form-row form-row-2">
                        {{-- <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        --}}
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <p style="margin-left: 20px">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Lupa password?') }}
                                </a>
                            @endif
                        </p>
                    </div>
                </div>
                {{-- Button --}}
                <div class="form-row-last">
                    <input type="submit" name="login" class="register" value="Masuk">
                    {{-- @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                </div>
                
                <p style="text-align: center"> 
                    Belum memiliki akun? Silahkan
                    <a href="{{ route('register') }}" class="text">registrasi</a>
                    di akun anda
                </p>
            </div>
        </form>
    </div>
</div>
@endsection