<fieldset>
    <legend>{{$roman->titre}}</legend>
    <ul>
        <li><p>Prix:{{$roman->prix}}</p></li>
        <li><p>Annee:{{$roman->annee}}</p></li>
        <li><p>Auteur:{{$roman->auteur}}</p></li>
        <li><p>Editeur:{{$roman->editeur}}</p></li>
        <img src="{{$roman->couverture}}" alt="Couverture Image">
    </ul>
    <p>Adresse: {{$roman->adre}}</p>
</fieldset>
<a href="{{route("romans.index")}}">Retourner</a>