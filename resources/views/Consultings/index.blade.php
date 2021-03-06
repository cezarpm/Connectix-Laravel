@section('title', 'Connectix -- Consultorias')
@extends('layouts.template')

@section('content')

    <section class="table">
        <div class="container">
            <h1>Index</h1>
            <p>
                <a href="{{url()->current().'/create'}}">Create New</a>
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
                @foreach($consultings as $consulting)
                    <tr>
                        <td>
                            {{$consulting->name}}
                        </td>
                        <td>
                            {{$consulting->description}}
                        </td>
                        <td>
                            {{$consulting->price}}
                        </td>
                        <td>
                            {{$consulting->category->name}}
                        </td>
                        <td>
                            <a href="consultings/{{$consulting->id}}/edit">Edit</a>
                            <a href="consultings/{{$consulting->id}}">Details</a>
                            <a href="consultings/{{$consulting->id}}"
                               onclick="event.preventDefault();
                                document.getElementById('delete-form').submit();">Delete
                            </a>
                            <form id="delete-form" action="{{ route('consultings.destroy', $consulting) }}" method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
