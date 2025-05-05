<form method="POST" action="/login">
    @csrf
    <input name="email" type="email" required placeholder="Email">
    <input name="password" type="password" required placeholder="Password">
    <button type="submit">Login</button>
</form>
<a href="/register">Register</a>
