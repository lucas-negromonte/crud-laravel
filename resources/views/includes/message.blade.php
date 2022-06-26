@if ($errors->all())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    @endforeach
@endif

@if (session('message'))
    <div class="alert alert-{{ session('color') ?? 'danger' }}">
        <p>{{ session('message') }}</p>
    </div>
@endif
