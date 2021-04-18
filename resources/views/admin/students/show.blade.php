@extends('layouts.app-admin')

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white">
    Редактирование студента
  </div>
  <div class="card-body">
    <form>
      <div class="form-row">
        <div class="form-group col">
          <label for="inputSurname">Фамилия</label>
          <input type="text" class="form-control" id="inputSurname" value="Иванов" disabled>
        </div>
        <div class="form-group col">
          <label for="inputName">Имя</label>
          <input type="text" class="form-control" id="inputName" value="Иван" disabled>
        </div>
        <div class="form-group col">
          <label for="inputPatronymic">Отчество <span class="text-muted">(при наличии)</span></label>
          <input type="text" class="form-control" id="inputPatronymic" value="Иванович" disabled>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Адрес</label>
        <input type="text" class="form-control" id="inputAddress" value="425250, Республика Марий Эл, г. Йошкар-Ола, ул. Советская, д.17, кв.85" disabled>
      </div>
      <div class="float-right">
        <a class="btn bg-dark text-white" href="{{ route('admin.students.edit') }}">Редактировать</a>
        <a class="btn btn-danger text-white" href="{{ route('admin.students.index') }}">Отмена</a>
      </div>
    </form>
  </div>
</div>
@endsection
