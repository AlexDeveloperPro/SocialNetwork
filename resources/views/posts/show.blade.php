    @extends('layouts.layout', ['title' => "Пост №$post->post_id. $post->title"]) {{--подключаемся к шаблону layout.blade.php --}}
    @section('content')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h2>{{ $post->title }}</h2></div>
                    <div class="card-body">{{ $post->descr }}</div>
                    <div class="card-img card-img_max" style="background-image:url({{$post->img ??  asset('img/defauld.jpg')}})"></div>
                    <div class="card-descr"{{ $post->descr }}>Описание:</div>
                    <div class="card-author">Автор: {{ $post->name }}</div>
                    <div class="card-date">Пост создан: {{ $post->created_at->diffForHumans() }}</div>
                    <div class="card-btn">
                        <a href="{{ route('post.index') }}" class="btn btn-outline-primary"> На главную</a>  
                        <a href="{{ route('post.edit', ['id' => $post->post_id]) }}" class="btn btn-outline-success"> Редактировать</a>  
                        <form action="{{ route('post.destroy', ['id' => $post->post_id]) }}" method="post" onsubmit="if (confirm('Точно удалить пост?')) { return true } else {return false}">
                            @csrf
                            @method('DELETE') 
                            <input type="submit" class="btn btn-outline-danger" value="Удалить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
         
    @endsection   
     
 