@extends('layouts.app')

@section('content')

	<h1>NO.{{ $task->id }} の詳細ページ</h1>
	
	<table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>ユーザー名</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>内容</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集する', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection