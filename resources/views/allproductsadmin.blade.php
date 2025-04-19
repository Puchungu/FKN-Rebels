<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All products</title>
    @vite(['resources/css/adminallproducts.css'])
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->nombre}}</td>
                <td>{{$product->caracteristicas}}</td>
                <td>{{$product->precio}}</td>
                <td>{{$product->stock}}</td>
                <td>
                    <a href="{{route('admin.edit',$product->id)}}"><button type="button">Editar</button></a>
                </td>    
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>