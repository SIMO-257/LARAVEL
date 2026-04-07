<!DOCTYPE html>
<html>
<head><title>Etapes du Projet</title></head>
<body>
  <h1>Etapes du projet : {{ $projet->titre }}</h1>
  <table border='1'>
    <tr>
      <th>Description</th>
      <th>Date de Realisation</th>
    </tr>
    @foreach($etapes as $etape)
    <tr>
      <td>{{ $etape->description }}</td>
      <td>{{ $etape->date_realisation }}</td>
    </tr>
    @endforeach
  </table>
  <p>Nombre d'etapes : {{ count($etapes) }}</p>
</body>
</html>
