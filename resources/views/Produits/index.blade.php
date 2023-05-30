@extends('layout.layout')
@section('titre')
    Liste des Produits
@endsection

@section('content')
    <div class="container-fluid">
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($produits as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th>{{ $item->libelle }}</th>
                        <th>{{ $item->prix }}</th>
                        <th class="bg-black">
                            <a href="{{ route('produit.show', ['produit' => $item->id]) }}" class="btn btn-outline-info text-white"><i class="bi bi-info"></i></a>
                            <a href="" class="btn btn-outline-danger text-white"><i class="bi bi-trash"></i></a>
                            <a href="" class="btn btn-outline-warning text-white"><i class="bi bi-pen"></i></a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
