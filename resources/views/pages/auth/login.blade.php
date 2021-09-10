@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')

<div class="col-xxl-5 auth col-lg-6 my-auto py-lg-0 pt-lg-50 pb-lg-50 pt-30 pb-47 px-0">
            <div class="col-lg-6 offset-lg-8">
              <div class="auth-logo">
                  <img src="frontend/assets/logosea.png" alt="">
              </div>

            <div class="auth-title">
                  <h4>Hai Sobat Laut,</h4>
                    <p>Login dulu ya</p>
              </div>
                  <div class="group-form">
                    <form action="" class="form-group" method="post">
                      <label for="" class="d-block input-label">Email</label>
                      <input class="input-field border-0" type="email" name="email" id="" placeholder="Your Email"
                      autocomplete="on" required />

                      <label for="" class="d-block input-label">Kata Sandi</label>
                      <input class="input-field border-0" type="password" name="password" id="" placeholder="Password"
                      autocomplete="on" required />
                    </form>


                    <p class="forget-password">
                      <a href="" class="">Lupa Password</a>
                    </p>

                    <div class="button">
                      <a class="btn btn-primary" href="#" role="button">Masuk</a>
                      <a class="btn btn-secondary" href="register" role="button">Daftar Akun</a>
                    </div>
                  </div>

            </div>
          </div>
    </section>
@endsection
