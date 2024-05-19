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
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post" action="{{ route('terrains.modifier',['id' => $terrain->id]) }}">
                    <div class="form-floating mb-3">
                        <input name="longueur" value="{{$terrain->longueur}}" type="longueur" class="form-control" id="floatingInput" placeholder="Longueur">
                        <label for="floatingInput">Longueur</label>
                    </div>
                    <div class="form-floating">
                        <input name="largeur" value="{{$terrain->largeur}}" type="largeur" class="form-control" id="floatingPassword" placeholder="Largeur">
                        <label for="floatingPassword">Largeur</label>
                    </div>
                    <br>
                    <select name="type_papier" class="form-select" aria-label="Default select example">
                        <option selected>Veuillez choisir votre type de papier</option>
                        <option value="Bail">Bail</option>
                        <option value="Titre foncier">Titre foncier</option>
                    </select>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </body>
</html>
