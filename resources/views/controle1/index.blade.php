<table border="1">
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>annee</th>
        <th>actiones</th>
    </tr>
    @foreach ($romans as $r)
        <tr>
            <td>
                <a href="{{route("romans.show",$r->id)}}">
                    {{$r->id}}
                </a>
            </td>
            <td>{{$r->titre}}</td>
            <td>{{$r->prix}}</td>
            <td>{{$r->annee}}</td>
            <td>
                <form action="{{route("romans.delete",$r->id)}}" method="DELETE">
                    @csrf
                    @method("DELETE")
                    <button>Supprimer</button>
                </form>
                <a href="{{route("romans.edit",$r->id)}}">
                    <button>Editer</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>