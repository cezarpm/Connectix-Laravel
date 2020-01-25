@extends('template')
@section('title', 'Connectix -- Consultorias')
@section('content')
    <section class="container">
        <h1>Create</h1>
        <h4>Consulting</h4>
        <hr/>
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="text-danger"></div>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control"/>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Categoria</label>
                        <select class="form-control"></select>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Preço</label>
                        <input class="form-control"/>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descrição</label>
                        <input class="form-control"/>
                        <span  class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <a href="#">Back to List</a>
        </div>
    </section>

@endsection

