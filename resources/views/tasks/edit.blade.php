@extends('layouts.main')
@section('title', 'Editar Tarefa')
@section('content')

    <div class='row'>
        <div class='col-sm-12'>
            <h1 class='mt-4 mb-4'>Editar Tarefa</h1>
            {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']) !!}
                @component('components.taskForm')
                @endcomponent
            {!! Form::close() !!}
        </div>
    </div>
@endsection
