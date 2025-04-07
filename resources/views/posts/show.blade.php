
     @extends('layouts.layout') {{--подключаемся к шаблону layout.blade.php --}}
    @section('content')

    
     <div class="row">
         @foreach ( $posts as $post)  
             <div class="col-12">
                 <div class="card">
                     <div class="card-header"><h2>{{ $post->title }}</h2></div>
                     <div class="card-body">{{ $post->descr }}</div>
                     <div class="card-img card-img_max" style="background-image:url({{$post->img ??  asset('img/defauld.jpg')}})"></div>
                     <div class="card-author">Автор: {{ $post->name }}</div>
                     <div class="card-date">Пост создан: {{ $post->create_at }}</div>
                     <a href="{{ route('post.index') }}" class="btn btn-outline-primary"> На главную</a>  
                   </div>
                 </div>
             </div>
        @endforeach
    </div> 
  
    @endsection   
     
 