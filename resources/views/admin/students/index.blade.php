@extends('layouts.app-admin')

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white">
    Список студентов
    <a class="btn btn-sm btn btn-light float-right" href="{{ route('admin.students.create') }}">
      Добавить студента
    </a>
  </div>
</div>
    <table class="table table-sm border">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Отчество</th>
          <th scope="col" class="text-right">Действия</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 1; $i < 10; $i++)
        <tr>
          <th scope="row">{{ $i }}</th>
          <td>Иванов</td>
          <td>Иван</td>
          <td>Иванович</td>
          <td class="text-right">
            <a class="btn btn-sm btn-dark" href="{{ route('admin.students.edit') }}">Редактировать</a>
            <a class="btn btn-sm btn-danger" href="{{ route('admin.students.index') }}">Удалить</a>
          </td>
        </tr>
        @endfor
      </tbody>
    </table>
@endsection
