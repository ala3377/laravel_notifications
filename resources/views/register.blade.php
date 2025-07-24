<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Home_style.css') }}">

</head>

<body>
    <header>
        <h1>Welcome to My Awesome Website</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/main_page') }}">Home</a></li>
                {{-- <li><a href="{{ url('/mainPageVender') }}">Vendor_Home</a></li>
                <li><a href="{{ url('/loginPageVender') }}">login Vendor</a></li> --}}
                <li><a href="{{ url('/features') }}">Features</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/login_page') }}">Login</a></li> <!-- Updated to connect to the Laravel route -->
                {{-- <li><a href="{{ route('categories.index') }}">Categories</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('orders.index') }}">Orders</a></li>
                <li><a href="{{ route('images.manage') }}">Manage Images</a></li> --}}
            </ul>
        </nav>
    </header>
    <div class="container">
        <h1>Add New User</h1>
        <form action="{{ route('myRegisters') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number" required>
            </div>
            <button type="submit">Add User</button>
        </form>
    </div>
</body>

</html>
