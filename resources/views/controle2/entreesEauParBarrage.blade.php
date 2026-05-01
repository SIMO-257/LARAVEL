<h1>Sélectionner un barrage</h1>
<form action="{{route("index")}}" method="POST">
    @csrf
    <select name="nom" >
        @foreach ($barrages as $b)
            <option value="{{$b->Nom}}">{{$b->Nom}}</option>    
        @endforeach
    </select>
    <button type="submit">Submit</button>
</form>
<h1>Entrées d'Eau:</h1>
<table border="1">
    <tr>
        <th>Flux d'Entrée</th>
        <th>Quantitz Titale</th>
        <th>Origine</th>
        <th>Actions</th>
    </tr>
    @foreach ($list as $e)
        <tr>
            <td>{{$e->EntreesEauId}}</td>
            <td>{{$e->QuantiteTotale}}</td>
            <td>{{$e->Origine}}</td>
            <td>
                <button>Supprimer</button>
                <button>Editer</button>
            </td>
        </tr>
    @endforeach
</table>
<label>Grand Total : {{$somme}}</label>