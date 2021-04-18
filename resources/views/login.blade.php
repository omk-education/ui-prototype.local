@extends('layouts.app-guest')

@section('content')
<br><br><br><br>
<form class="form-signin col-4 offset-4 mx-auto" action="">
  <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
  <label for="inputEmail" class="sr-only">Логин</label>
  <input type="text" id="inputLogin" class="form-control mb-1" placeholder="Логин" autofocus>
  <label for="inputPassword" class="sr-only">Пароль</label>
  <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Пароль">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Запомнить
    </label>
  </div>
  <a href="{{ route('admin.index') }}" class="btn bg-dark text-white btn-block">Войти</a>
</form>
@endsection
