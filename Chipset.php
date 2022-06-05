<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chipmark - Home</title>

    <!--CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: black;">

    <?php
    require_once("sparqllib.php");
    $searchInput = "";
    $filter = "";

    if (isset($_POST['search'])) {
        $searchInput = $_POST['search'];
        $data = sparql_get(
            "http://localhost:3030/chipset",
            "
                PREFIX id: <https://chipset.com/>
                PREFIX chip: <https://chipset.com/ns/chip#>

                SELECT ?Company ?CpuName ?GSC ?GBM  ?CSpeed ?GpuName 
                WHERE
                { 
                    ?chips
                    chip:Company        ?Company ;
                    chip:CpuName        ?CpuName ;
                    chip:GSC            ?GSC ;
                    chip:GBM            ?GBM ;
                    chip:CSpeed         ?CSpeed ;
                    chip:GpuName        ?GpuName .
                        FILTER 
                        (regex (?Company, '$searchInput', 'i') 
                        || regex (?CpuName, '$searchInput', 'i') 
                        || regex (?GSC, '$searchInput', 'i') 
                        || regex (?GBM, '$searchInput', 'i') 
                        || regex (?GPU, '$searchInput', 'i') 
                        || regex (?CSpeed, '$searchInput', 'i') 
                        || regex (?GpuName, '$searchInput', 'i'))
                }
            "
        );
    } else {
        $data = sparql_get(
            "http://localhost:3030/chipset",
            "
                PREFIX id: <https://chipset.com/>
                PREFIX chip: <https://chipset.com/ns/chip#>
                
                SELECT ?Company ?CpuName ?GSC ?GBM  ?CSpeed ?GpuName 
                WHERE
                { 
                    ?chips
                        chip:Company        ?Company ;
                        chip:CpuName        ?CpuName ;
                        chip:GSC            ?GSC ;
                        chip:GBM            ?GBM ;
                        chip:CSpeed         ?CSpeed ;
                        chip:GpuName        ?GpuName .
                }
            "
        );
    }

    if (!isset($data)) {
        print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container container-fluid">
            <a class="navbar-brand"><img src="src/img/logo.png" style="width:75px" alt="Logo"></a>
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
                <form class="d-flex" role="search" action="" method="post" id="search" name="search">
                    <input class="form-control me-2" type="search" placeholder="Temukan disini" aria-label="Search" name="search">
                    <button class="btn btn-outline-secondary" type="submit" style="color: White;">Temukan</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container container-fluid my-3">
        <?php
        if ($searchInput != NULL) {
        ?>
            <i class="fa-solid fa-magnifying-glass" style="color: white;"></i><span style="color: white;"> Menampilkan hasil pencarian untuk
                <b>"<?php echo $searchInput; ?>"</b></span>
        <?php
        }
        ?>
        <table class="table table-bordered table-hover text-center table-responsive">
            <thead class="table-secondary align-middle">
                <tr>
                    <th>No.</th>
                    <th>Company</th>
                    <th>CPU Name</th>
                    <th>Geekbench Single Core</th>
                    <th>Geekbench Multi Core</th>
                    <th>Clock Speed</th>
                    <th>GPU Name</th>
                </tr>
            </thead>
            <tbody class="align-middle table-dark">
                <?php $i = 0; ?>
                <?php foreach ($data as $data) : ?>
                    <td><?= ++$i ?></td>
                    <td><?= $data['Company'] ?></td>
                    <td><?= $data['CpuName'] ?></td>
                    <td><?= $data['GSC'] ?></td>
                    <td><?= $data['GBM'] ?></td>
                    <td><?= $data['CSpeed'] ?></td>
                    <td><?= $data['GpuName'] ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php
    if ($searchInput != NULL) {
    ?>
        <footer class="footer text-light text-center bg-dark pb-1 fixed-bottom">
            <p>Copyright &copy; Alif Fachrel Anargya
        </footer>
    <?php
    } else {
    ?>
        <footer class="footer text-light text-center bg-dark pb-1">
            <p>Copyright &copy; Alif Fachrel Anargya
        </footer>
    <?php
    }
    ?>
</body>

</html>