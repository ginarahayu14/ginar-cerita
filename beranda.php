<?php
include "db/koneksi.php";
session_start();

if ($_SESSION['level'] = "") {
    header("location: . ./index.php");
    # code...
}

if ($_SESSION['level'] == "user") {
    header("location: beranda.php");
    # code...
}

echo $_SESSION['level'];
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        h2 {
            font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 22px;
            line-height: 28px;
            height: 26px;
        }

        p {
            font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            color: rgba(18, 18, 18, .64);
        }

        .greeting-and-content-settings hr {
            margin-top: 18px;
            margin-bottom: 18px;
            border: 1px solid black;
        }

        .greeting-and-content-settings {
            margin-top: 50px;
            min-width: 400px;
        }

        .greeting-and-content-settings .module-content .greeting h2 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 32px;
            color: #222;
            font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            line-height: 36px;
        }

        h3 {
            font-size: 32px;
            font-weight: 700;
            line-height: 1.33;
            color: #222;
            text-transform: capitalize;
            margin-top: 0;
        }

        .post-popular .heading {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .greeting-and-content-settings hr {
            margin-top: 18px;
            margin-bottom: 18px;
            border-top: 1px solid #eee;
        }

        .post-popular {
            padding-top: 24px;
            padding-bottom: 24px;
        }

        .pilihan .artikel .description p {
            margin-top: 18px;
            margin-bottom: 18px;
        }


        .middle {
            width: 100%;
            transition: .5s ease;
            opacity: 0;
            top: 40%;
            position: absolute;
            text-align: center;
        }

        .datatab:hover .image {
            opacity: 1;
        }

        .datatab:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #f2f2f2;
            color: black;
            font-size: 12px;
            padding: 8px;
            margin: 5px;
            box-shadow: 5px #000;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <img src="images/ine-logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
            <font size="5" font="center"><a href="beranda.php" style="color: black; text-decoration: none;"><b class="ml-2">Ineffable</b> </a></font>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapseNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Jelajahi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beranda.php?beranda=search"><i class="fas fa-search"></i></a>
                    </li>
                    <!-- <li>
            <form action="beranda.php" method="get" class="form-inline">
            <input type="text" class="form-control" placeholder="Cari ..." aria-label="Username" aria-describedby="basic-addon1" style="border: none;" name="cari">
            <input type="hidden" name="beranda" value="search_page">
            <input type="submit" name="nyari" class="btn btn-outline-success" />
          </li> -->
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menulis
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="beranda.php?beranda=create">
                                <li class="dropdown-item">Buat Cerita Baru</li>
                            </a>
                            <a href="beranda.php?beranda=profile&profile=cerita">
                                <li class="dropdown-item">Cerita Saya</li>
                            </a>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <?php
                        $select_user = $conn->query("SELECT * FROM tb_user WHERE email = '$_SESSION[email]' ");
                        while ($u = mysqli_fetch_array($select_user)) {
                        ?>
                            <?php if (empty($u['photo'])) : ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/wa15.jpg" class="profile-image rounded-circle" style="object-fit: cover 50% 50% no-repeat; width:30px; height:30px; border: 1px solid #000; margin-left: 10px;"><span class="caret" style="margin-left: 10px;"><?php echo $u['username']; ?></span></a>
                            <?php else : ?>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/<?php echo $u['photo']; ?>" class="profile-image rounded-circle" style="object-fit: cover 50% 50% no-repeat; width:30px; height:30px; border: 1px solid #000; margin-left: 10px;"><span class="caret" style="margin-left: 10px;"><?php echo $u['username']; ?></span></a>
                            <?php endif ?>

                        <?php
                        }
                        ?>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item"><a href="beranda.php?beranda=profile&profile=cerita"></i>Profil saya</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="beranda.php?beranda=profile&profile=perpustakaan">Perpustakaan</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="logout.php"><i class="fa fa-sign-out"></i>Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container p-md-4">

        <?php
        if (!empty($_GET['beranda'])) { //kondisi apakan ada parameter p didalam url
            if ($_GET['beranda'] == "profile") {
                include "profile.php";
            } elseif ($_GET['beranda'] == "create") {
                include "create.php";
            } elseif ($_GET['beranda'] == "arsip") {
                include "arsip.php";
            } elseif ($_GET['beranda'] == "edit") {
                include "edit_post.php";
            } elseif ($_GET['beranda'] == "delete") {
                include "delete_post.php";
            } elseif ($_GET['beranda'] == "detail") {
                include "detail.php";
            } elseif ($_GET['beranda'] == "add_perpus") {
                include "tambah_perpustakaan.php";
            } elseif ($_GET['beranda'] == "kategori") {
                include "kategori.php";
            } elseif ($_GET['beranda'] == "edit_profile") {
                include "edit_profile.php";
            } elseif ($_GET['beranda'] == "search_page") {
                include "search_page.php";
            } elseif ($_GET['beranda'] == "search") {
                include "search.php";
            } elseif ($_GET['beranda'] == "add-report") {
                include "add_report.php";
            } elseif ($_GET['beranda'] == "delete-komentar") {
                include "delete_komentar.php";
            } else {
                include "perpustakaan.php";
            }
        } else {
            include('home.php');
        }
        ?>

    </div>
    <div class="container-fluid bg-dark">
        <footer class="footer mt-5 p-md-3">
            <div class="container">
                <span class="text-muted p-md-3">Place sticky footer content here.</span>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        var myCarousel = document.querySelector('#myCarousel');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
</body>

</html>