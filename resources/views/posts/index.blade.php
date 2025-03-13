<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">       
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="\css\style.css" rel="stylesheet"> --}}

{{-- @vite(['resources/css/app.css', 'resources/js/app.js','resources/css/style.css','resources/js/style.js']) --}}
{{-- <link rel="dns-prefetch" href="//fonts.bunny.net"><link rel="dns-prefetch" href="//fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <a class="nav-link active" aria-current="page" href="/">Создать пост</a>
          </li>
        </ul>  
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Найти пост" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
      </div>
    </div>
  </nav>
 
{{-- //    <div class="container">
//     @if (isset($_GET['search']))
//       @if (count($posts)>0)
//       <h2>Результаты поиска по запросу <?=$_GET['search']?></h2>
//       <p class="lead"> Всего найденно {{ count($posts) }} постов</p>
//       @else
//       <h2>По запросу <?=$_GET['search']?> ничего не найденно</h2>
//       <a href="{{route('post.index')}}">Отобразить все посты</a>
//       @endif
//     @endif
//     <div class="row">
//         @foreach ( $posts as $post)  
//             <div class="col-6">
//                 <div class="card">
//                     <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
//                     <div class="card-body">
//                     <div class="card-img" style="background-image:url({{$post->img ??  asset('img/defauld.jpg')}})"></div>
//                     <div class="card-author">Автор: {{ $post->name }}</div>
//                     <a href="#" class="btn btn-outline-primary">Посмотреть пост</a>  
//                   </div>
//                 </div>
//             </div>
//         @endforeach
//     </div>

//       <div class="pagination">
//         {{$posts->links()}}
//     </div>
//   </div>
// </body>
// </html> 
 --}}
