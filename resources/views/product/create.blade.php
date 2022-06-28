@extends('template')

@section('content')
    <div class="bg-light my-3 p-3 rounded">
        @include('includes.message')
        <form action="{{ route('web.product.store') }}" method="POST" enctype="multipart/form-data">
            @include('product.includes.form')
            <a class="btn btn-light" href="{{ route('web.product.index') }}">Voltar</a>
        </form>
    </div>
@endsection
