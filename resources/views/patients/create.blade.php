<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Add New Patient:</legend>
        <form method="POST" action="{{route('patients.store')}}" >
            @csrf
            <input type="text" placeholder="Nom Patient" name="nom"><br><br>
            <input type="text" placeholder="Prenom Patient" name="prenom"><br><br>
            <input type="text" placeholder="Groupe Sanguin" name="groupe_sanguin"><br><br>
            <button type="submit">
                Add
            </button>
        </form>
    </fieldset>
    
</body>
</html>