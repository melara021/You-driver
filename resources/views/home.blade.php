<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-ico.svg') }}">

    
    <title>You Driver</title>

</head>
<body class="bg-primary">
    <!-- Navbar -->
    @include('components.navbar')

    <div class="hero d-flex justify-content-center align-items-center min-vh-100">
        <img src="{{ asset('img/fondos/hyundai.jpg') }}" alt="Hero Image" class="img-hero">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-secondary">Encuentra el coche ideal para ti</h1>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="linea "/>
                    </div>
                    <h4 class="text-secondary">Tenemos más coches para que elijas.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="marcas">
        <br>
        <h2 class="text-secondary">Marcas que manejamos</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="linea3 "/>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('img/marcas/nissan.jpg') }}" class="rounded img-fluid">
                    <br>
                    <br>
                    <p class="text-secondary">Nissan</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ asset('img/marcas/toyota.jpg') }}" class="rounded img-fluid">
                    <br>
                    <br>
                    <p class="text-secondary">Toyota</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ asset('img/marcas/hyundai.jpg') }}" class="rounded img-fluid">
                    <br>
                    <br>
                    <p class="text-secondary">Hyundai</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="{{ asset('img/marcas/honda.jpg') }}" class="rounded img-fluid">
                    <br>
                    <br>
                    <p class="text-secondary">Honda</p>
                </div>
            </div>
        </div>
    </div>

    <div class="marcas">
        <h2 class="text-secondary">Sobre nosotros</h2>
    </div>
    <div class="d-flex justify-content-center align-items-center mb-2">
        <p class="linea3" />
    </div>

    <div class="container-fluid rounded-0 bg-white mb-5 ">
      <div class="row h-100 align-items-center">
        <div class="col-md-6 d-flex align-items-center">
          <img src="{{ asset('img/fondos/about.png') }}" class="img-fluid" alt="About Us Image">
        </div>
        <div class="col-md-6 p-5 text-justify">
          <p class="text-justify">YouDriver es una empresa líder en el alquiler de autos, comprometida con la satisfacción del cliente y la excelencia en el servicio. Nos enorgullece ofrecer una amplia gama de vehículos de calidad y una experiencia de alquiler sin complicaciones para nuestros clientes.</p>
          <p class="text-justify">En YouDriver, contamos con un equipo dedicado de profesionales apasionados por brindar la mejor experiencia posible a nuestros clientes. Nuestro equipo está comprometido con los más altos estándares de calidad y se esfuerza por superar las expectativas en cada interacción.</p>
          <div class="d-flex justify-content-start mt-3"> <a href="{{ url('/about') }}" >
              <button class="bg-primary rounded-5 text-secondary" style="width:8rem; height: 3rem;">Leer más</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="marcas">
        <h2 class="text-secondary ">Carros disponibles para rentar</h2>
        <div class="d-flex justify-content-center align-items-center mb-5">
            <p class="linea4 "/>
        </div>
    </div>

    <div class="container ">
        <div class="row ">
            <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                <div class="card">
                    <h5 class="card-title text-center mt-5">Hilux</h5>
                    <img src="{{ asset('img/hailux.png') }}" class="rounded img-fluid">
                    <div class="card-body text-center">
                        <p class="card-text">Año:2022.</p>
                        <a href="#" class="btn btn-primary">Rentar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                <div class="card">
                    <h5 class="card-title text-center mt-5">Nissan Versa</h5>
                    <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                    <div class="card-body text-center">
                        <p class="card-text">Año:2020</p>
                        <a href="#" class="btn btn-primary">Rentar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                <div class="card">
                    <h5 class="card-title text-center mt-5">Honda Civic</h5>
                    <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                    <div class="card-body text-center">
                        <p class="card-text">Año: 2020</p>
                        <a href="#" class="btn btn-primary">Rentar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="botonvermas">
        <button type="button" class="btn btn-secondary btn-lg">Ver más</button>
    </div>

    </body>

    <!--FOOTER-->
    @include('components.footer')

</html>
