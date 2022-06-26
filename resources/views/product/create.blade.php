@extends('template')

@section('content')
    @include('includes.message')
    <form action="{{ route('web.product.store') }}" method="POST" enctype="multipart/form-data">
        @include('product.includes.form')
        <a class="btn btn-light" href="{{ route('web.product.index') }}">Voltar</a>
    </form>
@endsection
