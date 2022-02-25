@extends('layout.main')

@section('title', 'Notas')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="add-task-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nova Tarefa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="form-add-task" method="post">
            @csrf
            <label for="title-task">Titulo da tarefa:</label>
            <input type="text" name="titleTask" id="title-task"  class="form-control">
            
            <label class="mt-3" for="description-task">Descrição da tarefa:</label>
            <textarea maxlength="255" name="descriptionTask" id="description-task" class="form-control" rows="5"></textarea>
          </form>
        </div>
        <div class="modal-footer">
          <button title="Cancelar" type="button" class="btn-close-modal btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
          <button id="btn-add-task" title="Adicionar Nota" type="button" class="btn btn-primary"><i class="fa-solid fa-check"></i></button>
        </div>
      </div>
    </div>
  </div>
  
  <div id="cards-area">
    @foreach($tasks as $task)
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">{{ $task->description }}</p>
            <div class="btn-card">
              <button class="btn btn-primary"><i class="icons-buttons fa-solid fa-pen-to-square"></i></button>
              <button class="btn btn-danger"><i class="icons-buttons fa-solid fa-trash"></i></button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection