@section('title', 'Connectix -- Consultorias')
@extends('template')

@section('content')

    <section class="table">
        <div class="container">
            <h1>Index</h1>
            <p>
                <a href="#">Create New</a>
            </p>
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Nome
                    </td>
                    <td>
                        Descrição
                    </td>
                    <td>
                        Preço
                    </td>
                    <td>
                        Categoria
                    </td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Details</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
