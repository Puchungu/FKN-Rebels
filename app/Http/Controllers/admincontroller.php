<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function select()
    {
        $products = DB::select('SELECT * FROM tbl_products');
        return view('allproductsadmin', compact('products'));
    }

    public function edit($id){
        $products = DB::select("SELECT * FROM tbl_products WHERE id=?",[$id])[0]; 
        return view("adminedit",compact("products"));
    }

    public function update(Request $request,$id){
        $nombre = $request->input('nombre');
        $caracteristicas = $request->input('caracteristicas');
        $precio = $request->input('precio');
        $stock = $request->input('stock');
        $imageBinary = file_get_contents($request->file('img')->getRealPath());

        DB::update("UPDATE tbl_products SET nombre=?,caracteristicas=?,precio=?,img=?,stock=? WHERE id=?",[$nombre,$caracteristicas,$precio,$imageBinary,$stock,$id]);
        return redirect()->route('admin.allproducts');
    }
}
