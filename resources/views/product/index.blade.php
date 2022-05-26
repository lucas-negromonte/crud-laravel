@extends('template')

@section('content')
    <h1>Produtos</h1>
    @if (!empty($products))
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>
                            <button class="btn btn-primary">Atualizar</button>
                            <button class="btn btn-danger">Apagar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-danger">Nenhum produto cadastrado</p>
    @endif
@endsection
