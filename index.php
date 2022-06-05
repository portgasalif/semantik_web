<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chipmark</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
</head>
<!-- Body -->

<body style="background-color:black;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container container-fluid">
            <a class="navbar-brand"><img src="src/img/logo.png" style="width: 75px;" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="Chipset.php">Daftar Chipset</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-white" href="about.php">Tentang Saya</a>
                    </li>

                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators" color: black;>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://asset.kompas.com/crops/F7uuA3-8BF46fKgKH104jtaJxfA=/0x0:1200x800/750x500/data/photo/2020/11/12/5fad276a0ba02.jpg" class="d-block w-50 h-50" style="display: block; margin-left: auto; margin-right: auto; padding-top : 50px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/-YOsyfagRwZDmQj_iHD2pISj-5g=/100x0:1000x600/750x500/data/photo/2020/11/04/5fa22a41cfa46.jpg" class="d-block w-50 h-50" style="display: block; margin-left: auto; margin-right: auto; padding-top : 50px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/jemYir9AEHPxzqYnaRA5iAohzuI=/169x50:844x499/750x500/data/photo/2020/12/02/5fc6d922cb0e0.png" class="d-block w-50 h-50" style="display: block; margin-left: auto; margin-right: auto; padding-top : 50px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://asset.kompas.com/crops/M6R4Ij_5F1pi80fwTV_hmrOYQQY=/0x39:815x582/750x500/data/photo/2020/08/19/5f3c7c9288637.png" class="d-block w-50 h-50" style="display: block; margin-left: auto; margin-right: auto; padding-top : 50px;" alt="...">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <!-- Footer -->
        <footer class="footer text-light text-center bg-dark pb-1 fixed-bottom">
            <p>Copyright &copy; Alif Fachrel Anargya
        </footer>

</body>

</html>