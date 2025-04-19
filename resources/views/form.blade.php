<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    @vite('resources/css/form.css')
</head>

<body>
    <h1>Agregar Producto</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
        @endif
        @csrf

        <label for="nombre">Product name:</label><br>
        <input type="text" id="nombre" name="nombre" required placeholder="Enter the product name"><br><br>

        <label for="caracteristicas">Product description:</label><br>
        <input type="text" id="caracteristicas" name="caracteristicas" required
            placeholder="Enter the product description"></input><br><br>

        <label for="precio">product Price:</label><br>
        <input type="number" step="0.01" id="precio" name="precio" required
            placeholder="Enter the product price"><br><br>

        <label for="img">Product imagen:</label><br>
        <input type="file" id="img" name="img" accept="image/*" required><br><br>

        <label for="stock">Product stock:</label><br>
        <input type="number" id="stock" name="stock" required placeholder="Enter the product stock"><br><br>

        <button type="submit">Store product</button>
        <a href="{{ url('/admin') }}" class="button-link">Admin panel</a>
    </form>
</body>

</html>