<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Update New Romans:</legend>
        <form method="POST" action="{{route('romans.update')}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <input type="text" placeholder="Titre" name="titre" value="{{$roman->titre}}"><br><br>
            <select name="auteur" value="{{$roman->auteur}}">
                @foreach ($auteurs as $a)
                    <option value="{{$a->idaut}}">{{$a->nom+" "+$a->prenom}}</option>
                @endforeach
            </select>
            <input type="text" placeholder="Prix" name="prix" value="{{$roman->prix}}"><br><br>
            <input type="text" placeholder="Annee" name="annee" value="{{$roman->annee}}"><br><br>
            <input type="file" name="couverture" value="{{$roman->couverture}}"><br><br>
            <select name="numd" value="{{$roman->numd}}">
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