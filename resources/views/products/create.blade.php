<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <h1>Criar Produto</h1>
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="">

        <label for="price">Preço</label>
        <input type="number" id="price" name="price" value="">

        <button type="submit">
            Criar Produto
        </button>
    </form>
</body>
</html>
