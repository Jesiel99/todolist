


    {{ Form::label('name', 'Nome', ['class' => 'control-label']) }}
    {!! Form::text('name', null, ['class' => 'form-control form-control-lg', 'placeholder' => 'Nome' ]); !!}

    {!! Form::label('description', 'Descrição', ['class' => 'control-label mt-3']); !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição' ]); !!}

    {{ Form::label('due_date', 'Data', ['class' => 'control-label mt-3']) }}
    {{ Form::date('due_date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-sm-6">
            <button class="btn btn-block btn-success" type="submit" >Salvar</button>
        </div>
    </div>

