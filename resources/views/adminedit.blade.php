<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    @vite('resources/css/form.css')
</head>

<body>
    <h1>Agregar Producto</h1>
    <form action="{{ route('admin.update', $products->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <label>Product name:</label><br>
        <input type="text"  name="nombre" required placeholder="Enter the product name" value="{{$products->nombre}}"><br>

        <label>Product description:</label><br>
        <input type="text"  name="caracteristicas" required placeholder="Enter the product description" value="{{$products->caracteristicas}}"><br>

        <label>product Price:</label><br>
        <input type="number" step="0.01"  name="precio" required placeholder="Enter the product price" value="{{$products->precio}}"><br>

        <label >Product imagen:</label><br>
        <input type="file"  name="img" accept="image/*" required value="{{$products->img}}"><br>

        <label >Product stock:</label><br>
        <input type="number"  name="stock" required placeholder="Enter the product stock" value="{{$products->stock}}"><br>

        <button type="submit">Update product</button>
        <a href="{{ url('/admin') }}" class="button-link">Admin panel</a>
    </form>
</body>

</html>