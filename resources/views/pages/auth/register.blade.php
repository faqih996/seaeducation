@extends('layouts.auth')

@section('title', 'Register')

@section('content')

            <div class="col-xxl-5 auth col-lg-6 my-auto py-lg-0 pt-lg-50 pb-lg-50 pt-30 pb-47 px-0">
                <div class="col-lg-6 offset-lg-8">
                <div class="auth-logo">
                    <a class="navbar-brand align-self-center" href="{{ route('home') }}">
                        <img src="frontend/assets/logosea.png" alt="">
                    </a>
                </div>

                    <div class="auth-title">
                    <h4>Buat akun Sea Education</h4>
                        <p>Solusi kamu memulai karir
                        hospitaliy internasional</p>
                    </div>

                    <div class="group-form">
                        <form action="{{ route('register') }}" method="post" class="form-group">
                        @csrf

                        <div class="form-floating">
                        <label for="" class="d-block input-label">Nama Lengkap</label>
                        <input class="input-field border-0 @error('name') is-invalid @enderror" type="text" name="name" id="" placeholder="Nama lengkap"
                        autocomplete="on" required value="{{ old('name') }}">
                        @error('name')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="form-floating">
                        <label for="" class="d-block input-label">Email</label>
                        <input class="input-field border-0 @error('email') is-invalid @enderror" type="email" name="email" id="" placeholder="Email kamu"
                        autocomplete="on" required value="{{ old('email') }}">

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="form-floating">
                        <label for="" class="d-block input-label">Kata Sandi</label>
                        <input class="input-field border-0 @error('password') is-invalid @enderror" type="password" name="password" id="" placeholder="Masukan kata sandi"
                        autocomplete="on" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>

                        <div class="form-floating">
                        <label for="" class="d-block input-label">Konfirmasi Kata Sandi</label>
                        <input class="input-field border-0" type="password" name="password" id="" placeholder="Ulangi kata sandi"
                        autocomplete="on" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        </form>
                    </div>

                        <p class="forget-password">
                        <a href="" class=""></a>
                        </p>

                    <div class="button">
                        <a class="btn btn-primary" class="navbar-brand align-self-center" href="{{ route('register') }}" type="submit" role="button">Daftar Akun</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
