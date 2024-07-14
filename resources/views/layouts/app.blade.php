<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <title>CleanCo - Services @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>

<body>

    <nav class="navbar (19, 156, 255, 1)">
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo CleanCo" class="logo-img" width="100">
            <a class="navbar-brand" href="{{ route('inicio') }}">CleanCo</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('facturacion') }}">Facturación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="contact-info">
                <p>Teléfono: +57 3113598332</p>
                <p>Correo: cleanco@solutionssoft.com</p>
            </div>
            <div class="logo">
                <img src="{{ asset('images/footer.png') }}" alt="Logo de Mi Empresa">
            </div>
            <div class="copyright">
                <p>© {{ date('Y') }} SolutionsSoft. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>
</html>

