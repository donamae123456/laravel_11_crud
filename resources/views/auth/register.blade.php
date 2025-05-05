<form method="POST" action="/register">
    @csrf
    <input name="name" required placeholder="Name">
    <input name="email" type="email" required placeholder="Email">
    <input name="password" type="password" required placeholder="Password">
    <input name="password_confirmation" type="password" required placeholder="Confirm Password">
    <button type="submit">Register</button>
</form>
<a href="/login">Login</a>
