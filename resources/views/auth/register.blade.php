<form method="POST" action="{{ route('register') }}">
    @csrf


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required >
    </div>


    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>


    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    {{-- Confirm Password --}}
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
    </div>

    <button type="submit">Register</button>

    <p>
        Already have an account? <a href="{{ route('login-form') }}">Login here</a>
    </p>
</form>