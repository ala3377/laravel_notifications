<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Home_style.css') }}">
    <title>My Awesome Website</title>

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
<div class="hero">
    <img src="{{ asset('images/shopping.jpg') }}"  alt="Image 1" alt="Hero Image" class="hero-image" >
</div>


    <section class="features" id="features">
        <div class="feature">
            <h3>Feature One</h3>
            <p>Details about feature one. This is an amazing feature that you will love!</p>
        </div>
        <div class="feature">
            <h3>Feature Two</h3>
            <p>Details about feature two. Discover how it can improve your experience.</p>
        </div>
        <div class="feature">
            <h3>Feature Three</h3>
            <p>Details about feature three. This feature makes everything easier!</p>
        </div>
    </section>
    <br><br><br><br>
    <footer>
        <p>&copy; 2025 My Awesome Website. All rights reserved.</p>
    </footer>

</body>

</html>
