<form action="{{ route('profile') }}" method="post">
    @csrf
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" required />

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required /><br>

    <input type="submit" value="ok" />
</form>