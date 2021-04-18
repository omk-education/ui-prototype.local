@extends('layouts.app-admin')

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white">
    Добавление студента
  </div>
  <div class="card-body">
    <form>
      <div class="form-row">
        <div class="form-group col">
          <label for="inputSurname">Фамилия</label>
          <input type="text" class="form-control" id="inputSurname">
        </div>
        <div class="form-group col">
          <label for="inputName">Имя</label>
          <input type="text" class="form-control" id="inputName">
        </div>
        <div class="form-group col">
          <label for="inputPatronymic">Отчество <span class="text-muted">(при наличии)</span></label>
          <input type="text" class="form-control" id="inputPatronymic">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Адрес</label>
        <input type="text" class="form-control" id="inputAddress">
      </div>
      <div class="float-right">
        <a class="btn bg-dark text-white" href="{{ route('admin.students.index') }}">Сохранить</a>
        <a class="btn btn-danger text-white" href="{{ route('admin.students.index') }}">Отмена</a>
      </div>
    </form>
  </div>
</div>
@endsection
