@extends('template')
@section('title', 'Connectix -- Home')
@section('content')
    <section id="jumbotron-section">
        <div class="jumbotron jumbotron-fluid jumbotron-with-bg">
            <div class="container">
                <div class="jumbotrom-text">
                    <h1 class="display-4 font-weight-bold">
                        Aprenda com os melhores
                    </h1>

                    <p class="lead font-weight-bold">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupidi
                    </p>
                </div>

                <a class="btn btn-jumbotron" href="{{ url('/register') }}">Registre-se</a>
            </div>
        </div>
    </section>
    <section id="card-section">
        <div class="container">
            <h2 class="mt-4">O que aprender?</h2>
            <div class="album">
                <div class="row">
                    @foreach($consultings as $consulting)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="img-fluid" src="/img/pericao.jpg"/>
                                <div class="card-body">
                                    <h3>{{$consulting->name}}</h3>
                                    <p class="card-text">{{$consulting->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-danger">{{$consulting->price}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
