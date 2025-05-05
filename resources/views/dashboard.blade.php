<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h1>Welcome, {{ Auth::user()->name }}</h1>

    <p>You are logged in.</p>

    <a href="{{ route('products.index') }}">Go to Products</a>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
