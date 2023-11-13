<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function create(){
        return view('produit/create_produit');
    }
    public function store(Request $request){
     $post = produit::create([
            'name'=>$request->input('name'),
            'amount'=>$request->input('amount'),
            'description'=>$request->input('description')
        ]);
        //return redirect()->route('produit/index');
        return redirect('index');
    }
    public function show(){
        $produits = produit::all();
        return view('produit/index', compact('produits'));
    }
}
