@extends('default')
@section('title')
Yvanie website | Produit
@endsection
@section('content')
  <h1 class="heading" style="text-align: center">Liste des Produits</h1>

   <div class="table">
    <table width="100%">
        <thead style="background: gainsboro">
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->name }}</td>
                <td>{{ $produit->amount }}</td>
                <td>{{ $produit->description}}</td>
                <td>{{ $produit->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </div>
@endsection
