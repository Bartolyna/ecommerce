<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function productosapi(){//Se mostrara todos los productos en un api
        $productos = Producto::all();
        return $productos;
    }

    public function productoapi(Request $request){//Se mostrara un producto por id en una api
        $producto = Producto::findOrFail($request->id);
        return $producto;
    }
    
    public function tienda(){//Se mostrara todos los productos en la vista tienda
        $producto = Producto::all();
       return view('tienda')->withTitle('E-COMMERCE UNICO | TIENDA')->with(['producto' => $producto]);
    }

    public function carrito()  {//Se mostrara los prodcutos en el carrito
        $carritoCollection = \Cart::getContent();
        return view('carrito')->withTitle('E-COMMERCE UNICO | CARRITO')->with(['carritoCollection' => $carritoCollection]);;
    }

    public function agregar(Request $request){//Funcion para agregar producto
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', '!Producto agregado al carrito!');
    }

    public function remover(Request $request){//Remover producto del carrito
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', '!Producto removido!');
    }

    public function actualizar(Request $request){//Actualizar precio del prodcuto
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', '!Carrito actualizado !');
    }

    public function limpiar(){//Se eliminan todos los productos del carrito
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', '!Carrito limpio!');
    }
}
