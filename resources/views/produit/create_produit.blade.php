@extends('default')
@section('title')
Yvanie website | Produits
@endsection
@section('content')
<section class="produits">
    <form action="#" method="POST">
        <h2 class="headProduct">Product Form</h2>
        @csrf
        <input type="text" name="name" placeholder="Product Name">
        <input type="number" name="amount" placeholder="Product Amount">
        <textarea name="description" placeholder="Product Description"></textarea>
        <button type="submit">Submit</button>
      </form>
</section>
@endsection
