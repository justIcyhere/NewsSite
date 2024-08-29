<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Website</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        padding-top: 56px;
    }

    .card-title {
        font-size: 1.5rem;
    }

    .card-text {
        font-size: 1rem;
    }

    footer {
        padding: 1rem 0;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">NewsSite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mt-4">
               
                @include('partials/search')
            </ul>

            @if (Route::has('login'))
                @auth

                    <form action="{{ route('logout') }}" method="POST" class="mt-4 pr-2">
                        @csrf
                        <button class='btn btn-danger'>Logout</button>
                    </form>
                    <div class="mt-2 ps-2">
                        @if (auth()->user()->type == '1')
                        <a href="{{route('dashboard')}}"><button class="btn btn-info">Manage</button></a>
                            
                        @endif
                    </div>
                @else
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-primary mt-2">Login</button></a>
                @endauth
            @endif

        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mt-5">
        @auth

            @auth
                @if (auth()->user()->type == '1')
                    <p>Welcome, admin {{ Auth::user()->name }}!</p>
                @else
                    <p>Welcome {{ Auth::user()->name }}</p>
                @endif
            @endauth

        @endauth


        <div class="row">
            @include('partials/latest_news')
            @yield('posts')
        </div>

    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <p>&copy; 2024 NewsSite. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
