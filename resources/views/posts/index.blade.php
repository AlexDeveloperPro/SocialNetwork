
     @extends('layouts.layout', ['title' => 'Главная страница']) {{--подключаемся к шаблону layout.blade.php --}}
    @section('content')
    @if (isset($_POST['search']))
      @if (count($posts)>0)
       <h2>Результаты поиска по запросу <?=$_GET['search']?></h2>
       <p class="lead"> Всего найденно {{ count($posts) }}</p>
       @else
       <h2>По запросу <?=$_GET['search']?> ничего не найденно</h2>
       <a href="{{route('post.index')}}" class="btn btn-outline-primary">Отобразить все посты</a>
       @endif
     @endif
     <div class="row">
         @foreach ( $posts as $post)  
             <div class="col-6">
                 <div class="card">
                     <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                     <div class="card-body">{{ $post->descr }}</div>
                     <div class="card-img" style="background-image:url({{$post->img ??  asset('img/defauld.jpg')}})"></div>
                     <div class="card-author">Автор: {{ $post->name }}</div>
                     <a href="{{ route ('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Посмотреть пост</a>  
                   </div>
                 </div>
             </div>
        @endforeach
    </div> 
    @if (!isset($_GET['search']))
    {{$posts->links('vendor.pagination.simple-tailwind')}}
    @endif 
    @endsection   
     
  
 {{-- <div class="pagination">
  {{$posts->links()}} --}}
  