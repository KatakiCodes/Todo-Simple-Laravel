@extends('layouts.app')
@section('title','Lista de tarefas')
@section('content')
<h1>Editar tarefa</h1>
<form action="{{route('tasks-update',['id'=>$task->id])}}" class="form-group" method="post">
  @csrf
  @method('PUT')
    <div class="form-group mb-3">
      <input type="text" class="form-control form-control-lg" name="name" value="{{ $task->name }}"  placeholder="Título da tarefa...">
    </div>
    <div class="form-group mb-3">
      <textarea type="text" class="form-control form-control-lg" name="description" placeholder="Descrição da tarefa...">{{ $task->description }} </textarea>
    </div>
    </div>
    <div class="modal-footer">
      <a href="/" class="btn btn-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>
@endsection