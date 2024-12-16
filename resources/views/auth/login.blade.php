<?php
if(Auth::user()){
    return redirect('/dashboard');
}else{
    echo "no user";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="{{ route('login') }}" method="POST">
    @csrf
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>

</body>
</html>
