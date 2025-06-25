<!DOCTYPE html>
<html lang=”ru”>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <title>{{$title}}</title>     
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="\css\style.css" rel="stylesheet"> --}}

{{-- @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/style.css','resources/js/style.js']) --}}
{{-- <link rel="dns-prefetch" href="//fonts.bunny.net"><link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
{{-- <link href="\css\bootstrap.min.css" rel="stylesheet"> --}}
{{-- <link href="\css\style.css" rel="stylesheet">
<script src="\js\bootstrap.bundle.min.js"></script> --}} 

{{-- <link href="/css\bootstrap.min.css" rel="stylesheet">

    <link href="\css\style.css" rel="stylesheet"> --}}
    {{-- <script src="\js\bootstrap.bundle.min.js"></script> --}}
   
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="col-6 navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Главная</a>
          </li>
          <li class="nav-item offset-3">
            <a class="nav-link active" aria-current="page" href="{{ route('post.create') }}">Создать пост</a>
          </li>
        </ul>  
        <form class="d-flex" acyion="{{ route('post.index') }}" role="search">
          <input class="form-control me-2" name="search" type="search" placeholder="Найти пост" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
      </div>
    </div>
  </nav>
 
   <div class="container">
    @if($errors->any())
      @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span arian-hidden="true">&times;</span>
      </button>
     </div>
     @endforeach
    @endif
     @if(session('success'))
      
      @endif
    @yield('content')
</div>
<script src="{{ asset ('js/app.js') }}"></script>
</body>
</html> 