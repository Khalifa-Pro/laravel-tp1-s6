<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mes terrains</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container p-5">
    <div class="card">
        <div class="card-header bg-primary">
            <h3 style="color: white">Terrains</h3>
            <a href="{{ route('terrains.form') }}" style="
                text-decoration: none;
                border: 1px solid white;
                padding: 5px 5px 5px 5px;
                color: blue;
                background-color: white;
                float: right;
            ">
                Nouveau terrain
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr style="text-align: center">
                    <th scope="col">Longueur ( en mètre)</th>
                    <th scope="col">Largeur ( en mètre)</th>
                    <th scope="col">Type de papier</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($terrains as $terrain)
                    <tr style="text-align: center">
                        <td>{{$terrain->longueur}}</td>
                        <td>{{$terrain->largeur}}</td>
                        <td>{{$terrain->type_papier}}</td>
                        <td>
                            <a href="{{ route('terrain.formulaire',['id' => $terrain->id]) }}" style="text-decoration: none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a>
                            <a href="{{ route('terrains.supprimer',['id' => $terrain->id]) }}" style="text-decoration: none; color: red">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $terrains->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
</body>
</html>
