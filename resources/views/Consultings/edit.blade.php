@extends('layouts.template')
@section('title', 'Connectix -- Consultorias')
@section('content')
    <section class="container">
        <h1>Update</h1>
        <h4>Consulting</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <form method="POST" action="/consultings/{{$consulting->id}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label">Nome</label>
                        <input
                            name="name"
                            type="text"
                            id="name"
                            value="{{$consulting->name}}"
                            class="form-control @error('name') is-danger @enderror"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Preço</label>
                        <input
                            name="price"
                            type="number"
                            id="price"
                            value="{{$consulting->price}}"
                            class="form-control @error('price') is-danger @enderror"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descrição</label>
                        <input
                            name="description"
                            type="text"
                            id="description"
                            value="{{$consulting->description}}"
                            class="form-control @error('description') is-danger @enderror"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Criar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="{{route('consultings.index')}}">Back to List</a>
        </div>
    </section>

@endsection

