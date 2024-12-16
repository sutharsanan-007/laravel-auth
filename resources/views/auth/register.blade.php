<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ old('name') }}" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" required><br>

    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="{{ route('login') }}">Login</a></p>

</body>
</html>
