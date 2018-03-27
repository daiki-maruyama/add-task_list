@extends('layouts.app')

@section('content')

	<h1>新規作成ページ</h1>
	
	<div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-sm-offset-2 col-md-offset-2 col-md-8 col-sm-8 col-xs-12">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'status') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', '内容') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('保存', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection