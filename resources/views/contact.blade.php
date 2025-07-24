<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - My Awesome Website</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                <li><a href="{{ route(name: 'images.manage') }}">Manage Images</a></li> --}}
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1>Get in Touch</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 My Awesome Website. All rights reserved.</p>
    </footer>

</body>

</html>
