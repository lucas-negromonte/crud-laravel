@csrf
<div class="mb-3">
    <label for="name">Nome do produto</label>
    <input class="form-control" type="text" name="name" value="{{ $product->name ?? old('name')  }}">
</div>
<button class="btn btn-success">Salvar</button>
