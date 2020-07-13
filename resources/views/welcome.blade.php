    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->    

          
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css" class="rel">
      
            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .content {
                    padding-top: 15px;
                
                    text-align: center;
                }

            

              
                .icono{
      display: none;
      font-size: 24px;
      padding: 23.5px 20px;
    }
    .boton{
        color: blue;
        padding: 15px 15px; 
    }
            </style>
        </head>
           <header>
            
            
                <nav id="nav" class="nav1">
                    <div class="contenedor-nav">
                        
                        <div class="logo">
                            <img src="img/moto2r.png" alt="">
                        </div>
                
                        <div class="enlaces" id="enlaces">
                            @if (Route::has('login'))
                            <div class="top-right links">
                         @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                            </div>
                            @endif
                        </div>
                        <div class="icono" id="open">
                            <span>&#9776;</span>
                        </div>
                    </div>
                </nav>
                <div class="buscador">
                    <input class= "busc" type="text" size=60>
                         <button type="submit" class="btn btn-light">
                        <i class="fas fa-search boton"></i>
                        </button>
                   
              
                </div>
            </header>

        <body>
            <section class="team contenedor" id="equipo">
                <h3>Locales</h3>
                <p class="after">El mejor servicio de la region</p>
                <div class="card">
                    <div class="content-card">
                        <div class="people">
                            
                            <img src="img/comida.jpg" alt="">
                        </div>
                        <div class="texto-team">
                            <h4>Restaurantes</h4>
                            <p>Lorem ipsum dolor at sit</p>
                        </div>
                    </div>
                        <div class="content-card">
                        <div class="people">
                            
                            <img src="img/supermarket.jpg" alt="">
                        </div>
                        <div class="texto-team">
                            <h4>Supermercados</h4>
                            <p>Lorem ipsum dolor at sit</p>
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="people">
                            
                            <img src="img/farmacia.jpg" alt="">
                        </div>
                        <div class="texto-team">
                            <h4>Farmacias</h4>
                            <p>Lorem ipsum dolor at sit</p>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
           
        </body>
        <footer class="footer">Aqui el pie
            <div class="footer-container">
                `<div class="footer-main">
                    <div class="footer-columna">
                        <h3>Suscribete</h3>
                    </div>
                    <div class="footer-columna">
                        <h3>Donde estamos</h3>
                            <span class="fa fa-map-marker"><p>Av Rosa Julia Miches</p></span>
                            <span class="fa fa-envelope"><p>oscarg1910@gmail.com</p></span>
                            <span class="fa fa-phone"><p>+18293458697</p></span>
                    </div>
                    <div class="footer-columna">
                        <h3>Sobre Nosotros</h3>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
                <div class="footer-copy-redes">
                    <div class="main-copy-redes">
                        <div class="footer-copy">
                            &copy; 2020,todos los derechos reservados - 
                        </div>
                        <div class="footer-redes">
                    

                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </html>
