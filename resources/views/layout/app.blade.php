<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ShopLaravel')</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="{{ route('contact.index') }}">Contact</a></li>
            </ul>
            {{-- <ul>
                @auth
                    <li>
                        <a href="{{ route('profile') }}">Mon Profil</a>
                    @endauth
                </li>
                @guest
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endguest
            </ul> --}}
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; {{ date('Y') }} ShopLaravel - Tous Droits Réservé
    </footer>
</body>

</html>
