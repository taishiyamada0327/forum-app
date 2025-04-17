@extends('layouts.app')

@section('content')

        投稿一覧
        新規投稿


    @foreach($posts as $post)


                {{ $post->title }}
                投稿者: {{ $post->author_name }}
                {{ \Illuminate\Support\Str::limit($post->content, 150) }}


                        続きを読む
                        コメント: {{ $post->comments->count() }}

                    {{ $post->created_at->format('Y年m月d日 H:i') }}



    @endforeach

    {{ $posts->links() }}
@endsection
