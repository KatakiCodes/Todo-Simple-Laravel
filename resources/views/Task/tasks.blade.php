@extends('layouts.app')
@section('title','Lista de tarefas')
@section('content')
<h1>Lista de tarefas</h1>
<button class="btn btn-success mb-3" id="addNewtask" data-bs-toggle="modal" data-bs-target = "#addNewTaskModal">Adicionar nova tarefa</button>

@foreach($tasks as $task)
<div class="row">
  <div class="col-sm-12 mb-3">
    <div class="card text-dark" id="card-task">
      <div class="card-body">
        <h5 class="card-title" id ="card-title">{{ $task->name }}</h5>
        <p class="card-text" id="card-text">{{ $task->description }}</p>
        <div class="row">
          <div class="col-4 d-flex task-actions-container">
            <form action="{{ route('tasks-edit',['id'=>$task->id]) }}" method="get">
              <button class="form-control btn btn-primary" type="submit">Editar</button>
            </form>
            <form action="{{ route('tasks-destroy',['id'=>$task->id]) }}" method="post">
              @csrf
              @method('DELETE')
              <button data-bs-toggle="modal"class=" form-control btn btn-danger delete" id="delete">Excluir</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach


<!-- Modal new task -->
<div class="modal fade" id="addNewTaskModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-dark">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="modal-title">Nova tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('tasks-index')}}" class="form-group" method="post">
          @csrf
            <div class="form-group mb-3">
              <input type="text" class="form-control form-control-lg" name="name" id="taskName" placeholder="Título da tarefa...">
            </div>
            <div class="form-group mb-3">
              <textarea type="text" class="form-control form-control-lg" name="description" id="taskDescription" placeholder="Descrição da tarefa..."></textarea>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="btn-cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" id="btn-save" class="btn btn-success concludeTask">Criar</button>
            </div>
      </form>
    </div>
  </div>
</div>
@endsection