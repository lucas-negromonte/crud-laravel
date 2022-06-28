@extends('template')

@section('content')
    <div class="bg-light my-3 p-3 rounded">
        @include('includes.message')
        <form action="{{ route('web.product.update', ['product' => $product->id]) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @include('product.includes.form')
            <a class="btn btn-light" href="{{ route('web.product.index') }}">Voltar</a>
        </form>
    </div>
@endsection
