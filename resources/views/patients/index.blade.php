<h2>Liste des Patients:</h2>
<a href="{{route('patients.create')}}">Add new Patient</a>
<table border="1">
    <tr>

        <td>Num Dossier</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Groupe Sanguin</td>
        <td>Actiones</td>

    </tr>
    @foreach ($patients as $patient)
    <tr>
        <td>{{ $patient->num_dossier }}</td>
        <td>{{ $patient->nom }}</td>
        <td>{{ $patient->prenom }}</td>
        <td>{{ $patient->groupe_sanguin }}</td>
        <td>
            <a href="{{route('patients.edit',$patient->num_dossier)}}">
                <button>Edit</button>
            </a>
            <form method="POST" action="{{route('patients.destroy',$patient->num_dossier)}}" >
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>