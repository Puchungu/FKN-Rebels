<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos - FKN REBELS</title>
    @vite('resources/css/allproducts.css')
</head>

<body>
    
    @include('header')

    <section class="hero">
    <h1>All Products</h1>
    <p>Unleash your style. Explore every FKN piece we’ve crafted for rebels like you.</p>
        <div class="product-list">
            @foreach ($products as $product)
            <div class="product-card">
                <img src="data:image/{{ $product->imgType }};base64,{{ base64_encode($product->img) }}"
                    alt="Imagen del Producto">
                <h2>{{ $product->nombre }}</h2>
                <p>${{ number_format($product->precio, 2) }}</p>
            </div>
            @endforeach
        </div>
    </section>

    @include('footer')
</body>

</html>