@extends('template')

@section('content')
        @include('includes.message')
        <form action="{{ route('web.product.update', ['product' => $product->id]) }}" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @include('product.includes.form')
        <a class="btn btn-light" href="{{ route('web.product.index') }}">Voltar</a>
    </form>
@endsection
