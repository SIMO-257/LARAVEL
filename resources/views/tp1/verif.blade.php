<form action="{{route("accueil")}}" method="POST">
    @csrf
    <label for="age">Saisie votre age:</label>
    <input type="number" name="age" required>
    <button type="submit">Ouvrir la page secréte</button>
</form>