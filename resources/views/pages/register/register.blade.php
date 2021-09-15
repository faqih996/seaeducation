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

                    </div>
                        <form action="/register" method="post">
                            @csrf

                            <h4>Buat akun Sea Education</h4>
                            <p>Solusi kamu memulai karir
                            hospitaliy internasional</p>

                            <div class="form-floating">
                            <label for="floatingInput d-block">Name</label>
                            <input type="" class="form-control mb-3 @error('name') is-invalid @enderror" type="text" name="name" id="" placeholder="Nama lengkap"
                                autocomplete="on" required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating">
                            <label for="floatingInput d-block">Email address</label>
                            <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" type="text" name="email" id="" placeholder="name@example.com"
                                autocomplete="on" required value="{{ old('email') }}">
                                @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating">
                            <label for="floatingPassword d-block">Password</label>
                            <input type="password" class="form-control mb-3" id="floatingPassword" placeholder="Password">
                            </div>

                            <div class="form-floating d-block">
                            <label for="floatingPassword">Password</label>
                            <input type="repeatpassword" class="form-control mb-3" id="floatingPassword" placeholder="Password">
                            </div>

                            <div class="button">
                                <a class="btn btn-primary" class="navbar-brand align-self-center" href="{{ route('register') }}" type="submit" role="button">Daftar Akun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
