@extends('layouts.template')
@section('title', 'Connectix -- Consultorias')
@section('content')
    <section class="container">
        <h1>Create</h1>
        <h4>Consulting</h4>
        <div class="row">
            <div class="col-md-4">
                <form method="POST" action="/consultings">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Nome</label>
                        <input
                            name="name"
                            type="text"
                            id="name"
                            value="{{old('name')}}"
                            class="form-control @error('name') is-danger @enderror"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Preço</label>
                        <input
                            name="price"
                            type="number"
                            id="price"
                            value="{{old('price')}}"
                            class="form-control @error('price') is-danger @enderror"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descrição</label>
                        <input
                            name="description"
                            type="text"
                            id="description"
                            value="{{old('description')}}"
                            class="form-control @error('description') is-danger @enderror"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Criar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="#">Back to List</a>
        </div>
    </section>

@endsection

