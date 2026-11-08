<!DOCTYPE html>
<html>
<head><title>Customers</title></head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ url('/about') }}">About</a> |
        <a href="{{ url('/customers') }}">Customers</a> |
        <a href="{{ url('/users') }}">Users</a>
    </nav>
    <h1>Customer Accounts</h1>
    @foreach ($customers as $c)
        <p>{{ $c['name'] }} — {{ $c['email'] }}</p>
    @endforeach
</body>
</html>