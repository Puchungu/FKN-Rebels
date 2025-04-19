<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //function to store new product
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'caracteristicas' => 'required|string',
            'precio' => 'required|numeric',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'stock' => 'required|integer',
        ]);

        $nombre = $request->input('nombre');
        $caracteristicas = $request->input('caracteristicas');
        $precio = $request->input('precio');
        $stock = $request->input('stock');
        $imageBinary = file_get_contents($request->file('img')->getRealPath());

        //SQL for insert into table
        DB::insert('INSERT INTO tbl_products (nombre, caracteristicas, precio, img, stock) VALUES (?, ?, ?, ?, ?)', [
            $nombre, 
            $caracteristicas, 
            $precio, 
            $imageBinary,  
            $stock
        ]);
        return back()->with('success', 'Producto creado correctamente');
    }

    //function to show all products
    public function index()
    {
        $products = products::all();
        return view('allproducts', compact('products'));
    }
}