@if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
@endif

<form action="/page_secrete" method="Post">
    @csrf
    <label for="age">Saisie votre age:</label>
    <input type="number" name="age" required>
    <button type="submit">Ouvrir la page secréte</button>
</form>