@extends('layouts.app')

@section('content')

<h1>タスク一覧ページ</h1>

@if(count($tasks) > 0)
    <ul>
    @foreach($tasks as $task)
    <li>{{ $task->content }}</li>
    <li>{!! link_to_route('tasks.show','詳細ページ',['id' => $task-> id]) !!}
    
    @endforeach
    </ul>
    
    
@endif

{!! link_to_route('tasks.create','新規投稿') !!}



@endsection