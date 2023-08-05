<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body >
        <div class="container mx-auto px-4 mb-4">
            <p class="flex gap-2 my-4 btn btn-success">
                <a href="{{ route('products.export.collection') }}" bg-slate-900 hover:bg-slate-600 text-semibold rounded p-2> Exportar (Colection)</a><br>
                <a href="{{ route('products.export.view') }}" bg-slate-900 hover:bg-slate-600 text-semibold rounded p-2> Exportar (View)</a>
            </p>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Resumen</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->excerpt }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
                
                    
                @endforeach

            </table>
            {{ $products->links() }}
            
        </div>


    </body>
</html>
