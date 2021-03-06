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

  {{-- JS bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  {{-- JS Font-Awesome --}}
  <script src="https://kit.fontawesome.com/62e7f0221a.js" crossorigin="anonymous"></script>
  
</head>
<body>  
  <header id="navbar-area">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="d-flex">
          <button class="btn btn-success" type="submit" data-bs-toggle="modal" data-bs-target="#add-task-modal"><i class="fa-solid fa-plus"></i>  Nova Tarefa</button>
          <form action="/logout" method="post">
            @csrf
            <a  href="/logout" 
                class="nav-link" 
                onclick="event.preventDefault();this.closest('form').submit();">
            Sair  <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
          </form>
        </div> 
      </div>
    </nav>
  </header>

  @if(session('msg'))
    <p class="msg">
      {{ session('msg') }}
    </p>
  @endif

  <main>
    <div class="container-fluid">
      @yield('content')
    </div>
  </main>

  <footer>
      © 2022 Copyright
  </footer>

  {{-- Jquery CDN --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  {{-- JS created --}}
  <script src="js/script-welcome.js"></script>
  {{-- CDN Ajax --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>

</body>
</html>