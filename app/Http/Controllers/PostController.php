<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->search) {
                $posts = Post::join('users', 'author_id', '=','users.id')
                ->where('title', 'like', '%'.$request->search.'%')
                ->orWhere('descr', 'like', '%'.$request->search.'%')
                ->orWhere('name', 'like', '%'.$request->search.'%')
                ->orderBy('posts.created_at', 'desc')
                ->get();
                return view('posts.index', compact('posts'));
            }
        $posts = Post::join('users', 'author_id', '=','users.id') // обеденяем таблицы
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //создание нового поста
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request) //запись нового поста в таблицу с последующим его отображением
    { 
        $post = new Post(); // создали пост
        $post -> title = $request->title; //записали заголовок
        $post -> short_title = Str::length($request->title)>30 ? Str::substr($request->title, start:0,length:30) . '...' :
        $request->title;
        $post -> descr = $request->descr;
        $post -> author_id = rand(1,4); // обязательное поле idавтора должно быть заполнено поэтому ставим пока рандамное
        //если была картиника, записали ее адрес (путь до нее)
      if($request->file('img')){
        $path = Storage::putFile('public', $request->file('img')); 
        $url = Storage::url($path);
        $post->img = $url; // ссылку на картинку соз\хранили в базе данных
      }
      // сохраняем все вышесозданные данные  
        $post->save();
        return redirect()-> route('post.index')->with('success', 'Пост успешно создан!'); //посде создаия поста нас возвращает на главную страницу
    }

    /**
     * Display the specified resource.
     */
    
    public function show($id) // метод show позволяет смотреть конкретный пост и что-то сним делать
    {
        $post = Post::join('users', 'author_id', '=', 'users.id') //обеденяемся с табличкой юзерс по полям id_автора и id_юзера
                ->find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    //редактирование конкретного поста
    public function edit($id) // нас должно перебрасывать на страницу редактирования
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id) //редактирование текущего поста

    {
        $post = Post::find($id);
        $post->title = $request->title; 
        $post -> short_title = Str::length($request->title)>30 ? Str::substr($request->title, start:0,length:30) . '...' :
        $request->title;
        $post -> descr = $request->descr;

        if($request->file('img')){
            $path = Storage::putFile('public', $request->file('img')); 
            $url = Storage::url($path);
            $post->img = $url;
        }
        $post->update();
        $id = $post->post_id;
        return redirect()-> route('post.show', compact('id'))->with('success', 'Пост успешно отредактирован!'); //посде создаия поста нас возвращает на главную страницу

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()-> route('post.index')->with('success', 'Пост успешно удален!'); 
    }
}
