@extends('template')

@section('top')
    <div class="text-end">
        <a class="btn btn-primary" href="{{ route('web.product.create') }}">Novo produto</a>
    </div>
@endsection

@section('content')
    <div class="bg-light my-3 p-3 rounded">

        @include('includes.message')

        @if (!empty($products[0]))
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td class="text-center" style="width: 100px;">Ação</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td class="text-center">

                                <div class="btn-group">

                                    <a class="btn btn-primary mx-1"
                                        href="{{ route('web.product.edit', ['product' => $product->id]) }}">Atualizar</a>

                                    <form action="{{ route('web.product.destroy', ['product' => $product->id]) }}"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger mx-1">Apagar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-danger">Nenhum produto cadastrado</p>
        @endif
    </div>
@endsection
