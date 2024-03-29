@extends('layouts.applogin')

@section('content')
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Login</b>UFPSO</a>
    </div>
    <div class="bg-blue card-body">
      <p class="login-box-msg">Registrar un nuevo miembro</p>

      <form method="POST" action="{{ route('register') }}">
                        @csrf

        <div class="input-group mb-3">
          <input type="text" class=" bg-blue form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder=Nombre>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="bg-blue form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="Correo Electronico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="bg-blue form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class=" bg-blue form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                            </button>
          </div>
          <!-- /.col -->
        </div>
</form>

      <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection