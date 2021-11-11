<!doctype html>
<html lang="id-ID">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="mr-auto navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="p-2 mt-5 card">
            <h3>About Me</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/profil.jpg" class="rounded-circle" alt="Profil Picture" width="200">
                </div>
                <div class="text-center col-md-8">
                    <h1>Akhyar Fauzi</h1>
                    <p>Universitas Negeri Padang</p>
                    <p>SMK Negeri 1 Bukittinggi</p>
                    <p>Hobi Bermain Basket, dan Game Online</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-warning">
        <div class="container py-5 my-5" id="portofolio">
            <h3 class="text-center text-light">Portofolio</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/portofolio1.jpg" class="rounded portofolio" alt="Profil Picture" width="100%">
                </div>
                <div class="col-md-4">
                    <img src="img/portofolio2.jpg" class="rounded portofolio" alt="Profil Picture" width="100%">
                </div>
                <div class="col-md-4">
                    <img src="img/portofolio3.jpg" class="rounded portofolio" alt="Profil Picture" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="blog">
        <h3 class="text-center text-warning">Blog</h3>
        <div class="mt-4 row" id="blog">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img src="img/berita1.jpg" alt="Profil Picture" width="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img src="img/berita2.jpg" alt="Profil Picture" width="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img">
                        <img src="img/berita3.jpg" alt="Profil Picture" width="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5 mt-5" id="team">
        <h3 class="text-center">Team</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="img/team1.jpg" class="rounded-circle" alt="Profil Picture" width="200"/>
                <h5>Sarah</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam?</p>
            </div>
            <div class="col-md-3">
                <img src="img/team2.jpg" class="rounded-circle" alt="Profil Picture" width="200"/>
                <h5>Maya</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam?</p>
            </div>
            <div class="col-md-3">
                <img src="img/team3.jpg" class="rounded-circle" alt="Profil Picture" width="200"/>
                <h5>Anton</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam?</p>
            </div>
            <div class="col-md-3">
                <img src="img/team4.jpg" class="rounded-circle" alt="Profil Picture" width="200"/>
                <h5>Putri</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam?</p>
            </div>
        </div>
    </div>
    <footer class="p-4 mt-5 text-white bg-warning">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-md-4">
                    <h4>Contact</h4>
                    <p>Jl. Raya Bukittinggi KM. 1 Bukittinggi</p>
                    <p>0812-3456-7890</p>
                    <p>akhyarfauzisimdig2014@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>