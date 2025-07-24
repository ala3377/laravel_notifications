<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <header>
        <h1>Contact Us</h1>
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

    <div class="login-container">
        <h2>Login</h2>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <button type="button" style="background: #007bff"><a href="{{ url('/register_page') }}">Registery</a></button>
        </form><br>
        <div class="footer">
            <p>&copy; 2025 Your Company</p>
        </div>
    </div>
    <div>

    </div>
    <footer>
        <p>&copy; 2025 My Awesome Website. All rights reserved.</p>
    </footer>
</body>

</html>
