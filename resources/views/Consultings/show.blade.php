@section('title', 'Connectix -- Consultorias')
@extends('layouts.template')

@section('content')

    <div class="container">
        <h4>Consulting</h4>
        <hr/>
        <dl class="row">
            <dt class="col-sm-2">
                Nome
            </dt>
            <dd class="col-sm-10">
                {{$consulting->name}}
            </dd>
            <dt class="col-sm-2">
                Descrição
            </dt>
            <dd class="col-sm-10">
                {{$consulting->description}}
            </dd>
            <dt class="col-sm-2">
                Preço
            </dt>
            <dd class="col-sm-10">
                {{$consulting->price}}
            </dd>
            <dt class="col-sm-2">
                Categoria
            </dt>
            <dd class="col-sm-10">
                {{$consulting->category->name}}
            </dd>
        </dl>
        <div>
            <a href="{{route('consultings.index')}}">Back to List</a>
        </div>
    </div>
@endsection
