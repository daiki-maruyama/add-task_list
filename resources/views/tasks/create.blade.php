@extends('layouts.app')

@section('content')

	<h1>新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', '内容:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('保存') !!}

    {!! Form::close() !!}

@endsection