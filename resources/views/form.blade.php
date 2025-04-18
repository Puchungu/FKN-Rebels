<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto - FKN REBELS</title>
    @vite('resources/css/form.css')
</head>
<body>
    <h1>Agregar Producto</h1>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="caracteristicas">Características:</label><br>
        <textarea id="caracteristicas" name="caracteristicas" required></textarea><br><br>

        <label for="precio">Precio:</label><br>
        <input type="number" step="0.01" id="precio" name="precio" required><br><br>

        <label for="img">Imagen:</label><br>
        <input type="file" id="img" name="img" accept="image/*" required><br><br>

        <label for="stock">Stock:</label><br>
        <input type="number" id="stock" name="stock" required><br><br>

        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>
