<form method="POST" action="{{ route('login') }}">
    @csrf

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    {{-- Password --}}
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Login</button>

    <p>
        Don't have an account? <a href="{{ route('register-form') }}">Register here</a>
    </p>
</form>