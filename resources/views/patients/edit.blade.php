<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Update a Patient:</legend>
        <form method="POST" action="{{route('patients.update',$patient->num_dossier)}}" >
            @csrf
            @method('PUT')
            <input type="text" placeholder="Nom Patient" name="nom" value="{{$patient->nom}}"><br><br>
            <input type="text" placeholder="Prenom Patient" name="prenom" value="{{$patient->prenom}}"><br><br>
            <input type="text" placeholder="Groupe Sanguin" name="groupe_sanguin" value="{{$patient->groupe_sanguin}}"><br><br>
            <button type="submit">
                Update
            </button>
        </form>
    </fieldset>
</body>
</html>