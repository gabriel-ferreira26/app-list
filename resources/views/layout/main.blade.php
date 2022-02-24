<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  {{-- Bootstrap Css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Css proprio -->
  <link rel="stylesheet" href="css/styles.css">
  
</head>
<body>
  
  <!-- Modal -->
  <div class="modal fade" id="add-task-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Nova Tarefa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="form-add-task">
            <label for="title-task">Titulo da tarefa:</label>
            <input type="text" name="title-task" value="title" id="title-task" class="form-control">
            
            <label class="mt-3" for="description-task">Descrição da tarefa:</label>
            <textarea name="description-task" id="description-task" class="form-control" rows="5"></textarea>
          </form>
        </div>
        <div class="modal-footer">
          <button title="Cancelar" type="button" class="btn-close-modal btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
          <button id="btn-add-task" title="Adicionar Nota" type="button" class="btn btn-primary"><i class="fa-solid fa-check"></i></button>
        </div>
      </div>
    </div>
  </div>
  
  
  <div id="navbar-area">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="d-flex">
          <button class="btn btn-success" type="submit" data-bs-toggle="modal" data-bs-target="#add-task-modal"><i class="fa-solid fa-plus"></i>  Nova Tarefa</button>
        </div> 
      </div>
    </nav>
  </div>
  
  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>

  <footer>
      © 2022 Copyright
  </footer>


  {{-- JS bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  {{-- JS Font-Awesome --}}
  <script src="https://kit.fontawesome.com/62e7f0221a.js" crossorigin="anonymous"></script>
  {{-- Jquery CDN --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- JS created --}}
  <script src="js/script-welcome.js"></script>

</body>
</html>