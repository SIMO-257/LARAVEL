<!DOCTYPE html>
<html>
<head><title>Liste des Projets</title></head>
<body>
  <h1>Liste des Projets</h1>
  <table border='1'>
    <tr>
      <th>Titre</th>
      <th>Statut</th>
      <th>Date Debut</th>
      <th>Date Fin</th>
      <th>Budget</th>
      <th>Location</th>
      <th>Actions</th>
    </tr>
    @foreach($projets as $projet)
    <tr>
      <td>{{ $projet->titre }}</td>
      <td>{{ $projet->statut }}</td>
      <td>{{ $projet->date_debut }}</td>
      <td>{{ $projet->date_fin }}</td>
      <td>{{ $projet->budget }}</td>
      <td>{{ $projet->location }}</td>
      <td>
        <a href='{{ route("show", $projet->idP) }}'>Etapes</a>
        <a href='{{ route("create",$projet->idP) }}'>Ajouter</a>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
