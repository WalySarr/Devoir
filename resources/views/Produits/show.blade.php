@extends('layout.layout')
@section('titre')
    Informations Produit :
@endsection
<style>
    body{
        background-color: #575757 !important;
    }
</style>
@section('content')
    <div class="card w-50 mx-auto shadow-lg bg-black text-light">
        <div class="card-body">
            <h4 class="card-title">{{$produit->libelle}}</h4>
            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magni incidunt hic perferendis error voluptatibus deserunt commodi fuga excepturi earum, praesentium, quidem laboriosam a minima dolores modi deleniti nobis eos.</p>
            <p class="fs-5"><strong>{{$produit->prix}} €</strong></p>
            <a href="{{ route('produit.index')}}" class="btn btn-outline-secondary text-light">Liste Produits</a>
        </div>
    </div>
@endsection
