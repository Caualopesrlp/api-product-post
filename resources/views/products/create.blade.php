<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <body>

        <div class="card">

            <h1>Criar Produto</h1>

            @if (session('error'))
                <p class="error">
                    {{ session('error') }}
                </p>
            @endif

            @if (session('success'))
                <p class="success">
                    {{ session('success') }}
                </p>
            @endif


            <form action="{{ route('products.store') }}" method="post">

                @csrf

                <label for="title">Título</label>

                <input type="text" id="title" name="title" value="{{ old('title') }}">

                @error('title')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror


                <label for="price">Preço</label>

                <input type="number" id="price" name="price" value="{{ old('price') }}">

                @error('price')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror


                <button type="submit">
                    Criar Produto
                </button>

            </form>

        </div>

    </body>

</body>

</html>
