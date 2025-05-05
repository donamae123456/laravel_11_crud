<h1>Welcome, {{ Auth::user()->name }}</h1>
<a href="{{ route('products.index') }}">Manage Products</a>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
