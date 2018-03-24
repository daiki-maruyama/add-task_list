@extends('layouts.app')

@section('content')

	<h1>NO.{{ $task->id }} の編集ページ</h1>
	
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-sm-offset-2 col-md-offset-2 col-md-8 col-sm-8 col-xs-12">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ユーザー名') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'メッセージ') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新する', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

    
@endsection