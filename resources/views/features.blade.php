<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features - My Awesome Website</title>
    <link rel="stylesheet" href="{{ asset('css/features.css') }}">
</head>

<body>

    <header>
        <h1>Our Features</h1>
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
        <h1>Explore Our Amazing Features</h1>
        <div class="features-grid">
            <div class="feature">
                <h3>Feature One</h3>
                <p>Details about feature one. This feature provides exceptional benefits and enhances user experience.
                </p>
            </div>
            <div class="feature">
                <h3>Feature Two</h3>
                <p>Details about feature two. Discover how it can improve your efficiency and effectiveness.</p>
            </div>
            <div class="feature">
                <h3>Feature Three</h3>
                <p>Details about feature three. This feature simplifies your tasks and saves you time.</p>
            </div>
            <div class="feature">
                <h3>Feature Four</h3>
                <p>Details about feature four. Enjoy seamless integration with existing tools and processes.</p>
            </div>
            <div class="feature">
                <h3>Feature Five</h3>
                <p>Details about feature five. This feature is designed with user-friendliness in mind.</p>
            </div>
            <div class="feature">
                <h3>Feature Six</h3>
                <p>Details about feature six. Experience the latest technology and innovation.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 My Awesome Website. All rights reserved.</p>
    </footer>

</body>

</html>
