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