<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>

</head>
<style>
    body {
        font-family: 'jetBrains mono';
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto bg-dark rounded my-3">
                <h2 class="text-center text-primary my-3">Création d'un Produit</h2>
                <form action="{{ route('produit.store') }}" method="post">
                    @csrf
                    @if (session('addSuccess'))
                        <div class="alert alert-success">
                            {{ session('addSuccess') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="libelle" name="libelle"
                                placeholder="Libelle du produit">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" id="prix" name="prix"
                                placeholder="prix du produit">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-outline-warning">Création</button>
                        </div>
                    </div>

            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>
