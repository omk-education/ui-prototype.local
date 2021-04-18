@extends('layouts.app-admin')

@section('content')
<div class="card">
  <div class="card-header bg-dark text-white">
    Панель администратора

  </div>
  <div class="card-body">
    <h5 class="card-title">Загрузка данных...</h5>
    <div class="progress" style="height: 20px;">
      <div class="progress-bar bg-dark" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
  </div>
</div>
@endsection
