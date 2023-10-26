@extends('layout.app')

@section('title', 'Личный кабинет')
@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @include('user.partials.info', ['user'=>$user])
    </div>
    <div>
        <h2>Ваши избранные записи</h2>
        @foreach($user->favorites as $favorite)
            @foreach($post->where('id','=',$favorite->post_id) as $fav)
                    <li type="1"><a href="{{route('posts.show', $favorite->post_id)}}">{{$fav->title}}</a></li>
            @endforeach
        @endforeach
    </div>
    <div>
        <h2>Записи, которые вы прокомментировали</h2>
        @foreach($user->comments as $comment)
            @foreach($post->where('id','=',$comment->post_id) as $fav)
                
                <li type="1"><a href="{{route('posts.show', $favorite->post_id)}}">{{$fav->title}}</a></li>
            @endforeach
        @endforeach
    </div>
@endsection
