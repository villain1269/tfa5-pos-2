<!DOCTYPE html>
<html>
<head><title>Users</title></head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customers</a> |
        <a href="{{ url('/users') }}">Users</a>
    </nav>
    <h1>User Accounts</h1>
    @foreach ($users as $u)
        <p>{{ $u['username'] }} — {{ $u['role'] }}</p>
    @endforeach
</body>
</html>