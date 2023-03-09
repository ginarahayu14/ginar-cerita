<?php
include "header.php";
include "../db/koneksi.php";

session_start();

if ($_SESSION['level'] = "") {
    header("location: login.php");
    # code...
}

if ($_SESSION['level'] == "admin") {
    header("location: login.php");
    # code...
}

echo $_SESSION['role'];

?>

<input type="checkbox" id="nav-toggle" />
<div class="sidebar">
    <div class="sidebar-brand text-dark">
        <h2><span><b>Admin</b></span></h2>
    </div>
    <div class="sidebar-menu">
        <li class="item">
            <a href="index.php?halaman=report" class="menu-btn text-dark"><i class="fa-regular fa-flag"></i><span>Report</span></a>
        </li>
        <li class="item">
            <a href="index.php?halaman=kategori" class="menu-btn text-dark"><i class="fa-solid fa-list"></i><span>Kategori</span> </a>
        </li>
        <li class="item">
            <a href="index.php?halaman=user" class="menu-btn text-dark"><i class="fa-solid fa-users"></i><span>Users</span> </a>
        </li>
        <li class="item">
            <a href="logout.php" class="menu-btn text-dark"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span> </a>
        </li>
    </div>
</div>
<div class="maint-content">
    <header>
        <h3>
            <label for="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </label>
            _Ineffable
        </h3>
    </header>
    <?php
    if (isset($_GET['halaman'])) {
        $page = $_GET['halaman'];

        switch ($page) {
            case 'report':
                include "report.php";
                break;
            case 'kategori':
                include "kategori.php";
                break;
            case 'add_report':
                include "add_report.php";
                break;
            case 'kategori_add':
                include "kategori_add.php";
                break;
            case 'edit_kategori':
                include "edit_kategori.php";
                break;
            case 'delete-kategori':
                include "delete_kategori.php";
                break;
            case 'delete_report':
                include "delete_report.php";
                break;
            case 'add_user':
                include "add_user.php";
                break;
            case 'delete_user':
                include "delete_user.php";
                break;
            case 'user':
                include "user.php";
                break;
        }
    } else {
        include "kategori.php";
    }
    ?>
</div>
</body>

</html>