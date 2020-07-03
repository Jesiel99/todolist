@extends('layouts.main')

@section('title', 'Tasks Home')

<div class="position-relative ml-3 pt-5">
    <a href="{{ route('task.create') }}" class="btn btn-success mt-2"> Criar Tarefa </a>

    <h1 style="float: left; bottom 0px; " class="text-dark text-align-center mr-3" >Minhas Tarefas</h1>
</div>
<hr>

@foreach ($tasks as $task)
    @if ($task->done == false)

        <div class="row pl-3 pr-3 ">

            <div class="col-sm-12" >
                <div class="pt-3 pb-3">
                <h3 style="display: inline">
                    {{ $task->name }} <small>{{ $task->due_date }}</small>
                </h3>
                {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                    <div style="float: right">
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <button class="btn btn-sm btn-danger" type="submit"> Delete </button>
                    </div>
                {!! Form::close(); !!}
                </div>
            </div>
        </div>
        <hr>
    @endif

@endforeach

@section('content')


@endsection



