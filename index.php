<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ikuna - Free crypto website template by Middle Agency">
        <meta name="author" content="Arthur Rebré & Middle Agency">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <meta property="og:type" content="website" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="200" />
        <meta property="og:site-name" content="" />
        <meta property="og:description" content="..." />

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icons/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>Abbysinia Coin</title>

        <!-- Jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Google font : Roboto -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="libs/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css"/>
        <!-- Main style -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/module.css">
        <link rel="stylesheet" href="css/state.css">

        <!-- Smooth show effect -->
        <script>
            $(document).ready(function(){
                const ratio = .1
                const options = {
                root: null,
                rootMargin: '0px',
                threshold: ratio
                }
                const handleIntersect = function (entries, observer){
                entries.forEach(function (entry){
                    if (entry.intersectionRatio > ratio){
                    entry.target.classList.add('reveal-visible')
                    observer.unobserve(entry.target)
                    }
                })
                }
                const observer = new IntersectionObserver(handleIntersect, options)
                document.querySelectorAll('[class*="reveal-"]').forEach(function (r) {
                    observer.observe(r)
                })
            });
        </script>
    </head>

    <body>
        <!-- Main Header -->
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="#home" class="logo"><span class="color">Abyssinia</span>Coin</a>
                    </div>
                    <div class="col-6 text-right">
                        <span id="btnMenu" class="btn btn-secondary">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Menu -->
        <div class="main-menu">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#roadmap">Roadmap</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main Wrapper -->
        <div class="main-wrapper">

            <!-- Main Banner -->
            <section id="home" class="main-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 reveal-2">
                            <h1>Abyssiniya Coin</h1>
                            <p>Abyssiniya Coin  is a technology that's home to digital money,
                                 global payments, and applications. The community has built a booming digital 
                                 economy, bold new ways for creators to earn online, and so much more. 
                                 It's open to everyone, wherever you are in the world all you need is the internet.</p>
                            <a class="btn btn-md btn-primary" href="#about">About us</a>
                        </div>
                        <div class="col-12 col-md-4 reveal-3">
                            <img class="img-fluid" src="img/blockchain.png" alt="/">
                        </div>
                    </div>
                </div>
            </section>

            <!-- About section -->
            <section id="about" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 reveal-2">
                            <hr>
                            <h2 class="page-title">About us</h2>
                        </div>
                        <article class="col-12 col-md-6 reveal-2">
                            <p><strong>Abyssiniya Coin</strong> isn't just for digital money. 
                                Anything you can own can be represented, traded and put to use as non-fungible tokens (NFTs).
                                 You can tokenise your art and get royalties automatically every time it's re-sold. Or use a
                                  token for something you own to take out a loan. The possibilities are growing all the time.</p>   
                        </article>
                        <article class="col-12 col-md-6 reveal-2">
                            <p>
                                Today, we gain access to 'free' internet services by giving up control of 
                                our personal data. Abyssinia Coin services are open by default – you just need a wallet. 
                                These are free and easy to set up, controlled by you, 
                                and work without any personal info.</p>   
                        </article>
                        <article class="col-12 reveal-2 mt-4">
                            <h3>Join us:</h3>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-discord"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-telegram-plane"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-reddit-alien"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-github"></i></a>   
                        </article>
                    </div>
                </div>
            </section>

            <!-- Features section -->
            <section id="features" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 reveal-2">
                            <hr>
                            <h2 class="page-title">Our features</h2>
                        </div>
                        <article class="col-12 col-md-6 reveal-2">
                            <i class="fas fa-network-wired"></i>
                            <p><strong>Compatibility </strong>Industry dominance, established tech stack, tools, languages, standards, enterprise adoption.</article>
                        <article class="col-12 col-md-6 reveal-2">
                            <i class="fas fa-layer-group"></i>
                            <p><strong>Scalability</strong> Dedicated blockchains, scalable consensus algorithms, custom Wasm execution environments</p>   
                        </article>
                        <article class="col-12 col-md-6 reveal-2">
                            <i class="fab fa-connectdevelop"></i>
                            <p><strong>Security</strong> Modular ''security as a service'', provided either by Ethereum or by a pool of professional validators</p>   
                        </article>
                        <article class="col-12 col-md-6 reveal-2">
                            <i class="fas fa-exchange-alt"></i>
                            <p><strong>Developer Experience</strong> Equivalent to Ethereum, no protocol level knowledge required, no token deposits, fees or permissions</p>   
                        </article>
                    </div>
                </div>
            </section>

            <!-- Team section -->
            <section id="team" class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 reveal-2">
                            <p class="page-subtitle">Meet our team and contributors</p>
                            <h2 class="page-title">Team</h2>
                        </div>
                        <div class="col-12 col-md-4 reveal-2">
                            <article class="card">
                                <img src="https://raw.githubusercontent.com/musab-tatek/abyssinia-coin/main/img/150x150.png">
                                <h3>Musab Elias</h3>
                                <h4>CEO</h4>                                <p>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>     
                                </p>   
                            </article>
                        </div>
                        <div class="col-12 col-md-4 reveal-3">
                            <article class="card">
                                <img src="https://raw.githubusercontent.com/musab-tatek/abyssinia-coin/main/img/150x150.png">
                                <h3>Ahmed Mohammed</h3>
                                <h4>CFO</h4>
                                <p>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>     
                                </p>        
                            </article>
                        </div>
                        <div class="col-12 col-md-4 reveal-4">
                            <article class="card">
                                <img src="https://raw.githubusercontent.com/musab-tatek/abyssinia-coin/main/img/150x150.png">
                                <h3>Miftah Abdulkadir</h3>
                                <h4>CMO</h4>
                                <p>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>     
                                </p>             
                            </article>
                        </div>
                        <div class="col-12 col-md-4 reveal-4">
                            <article class="card">
                                <img src="https://raw.githubusercontent.com/musab-tatek/abyssinia-coin/main/img/150x150.png">
                                <h3>Musab Tatek</h3>
                                <h4>CTO</h4>
                                <p>
                                    <a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>     
                                </p>             
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="container">
                    <div class="row">
                        <article class="col-12 col-md-3">
                            <h3>Navigation</h3>
                            <ul>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#features">Features</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#partners">Partners</a></li>
                                <li><a href="#roadmap">Roadmap</a></li>
                            </ul>
                        </article>
                        <article class="col-12 col-md-3">
                            <h3>Exchanges</h3>
                            <ul>
                                <li><a href="#">Wallet</a></li>
                                <li><a href="#">Exchanges</a></li>
                                <li><a href="#">Stores</a></li>
                            </ul>
                        </article>
                        <article class="col-12 col-md-3">
                            <h3>Useful Links </h3>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Report</a></li>
                            </ul>
                        </article>
                        <article class="col-12 col-md-3">
                            <h3>Community</h3>
                            <ul>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Contribute</a></li>
                            </ul>
                        </article>
                        <div class="col-12">
                            <hr>   
                        </div>
                        <div class="col-12 col-md-6 social">
                            <p>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-discord"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-telegram-plane"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-reddit-alien"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-github"></i></a>                         
                            </p>
                        </div>
                        <div class="col-12 col-md-6 copyright">
                            <p>&copy; 2022 Musab Tatek</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- PopperJS & Bootstrap CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Slick -->
        <script type="text/javascript" src="libs/slick/slick.min.js"></script>
        <script>
            $('.partners-slider').slick({
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 3
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 2
                    }
                  }
                ]
            });
        </script>
        <!-- -->
        <script src="js/app.js"></script>
    </body>
</html>
