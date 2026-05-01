<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Add New Romans:</legend>
        <form method="POST" action="{{route('romans.store')}}" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Titre" name="titre"><br><br>
            <select name="auteur">
                @foreach ($auteurs as $a)
                    <option value="{{$a->idaut}}">{{$a->nom+" "+$a->prenom}}</option>
                @endforeach
            </select>
            <input type="text" placeholder="Prix" name="prix"><br><br>
            <input type="text" placeholder="Annee" name="annee"><br><br>
            <input type="file"  name="couverture"><br><br>
            <select name="numd">
                @foreach ($editeurs as $e)
                    <option value="{{$e->num}}">{{$e->tel}}</option>
                @endforeach
            </select>
            <button type="submit">
                Ajouter
            </button>
        </form>
    </fieldset>
    
</body>
</html>
