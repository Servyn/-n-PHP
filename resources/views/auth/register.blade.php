<!-- resources/views/auth/register.blade.php -->

<head>
    <!-- Các thẻ meta và các liên kết khác -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
