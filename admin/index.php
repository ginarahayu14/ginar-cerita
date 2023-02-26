<?php
include "header.php";
include "../db/koneksi.php";
?>

<input type="checkbox" id="nav-toggle" />
<div class="sidebar">
    <div class="sidebar-brand text-dark">
        <h2><span><b>Admin</b></span></h2>
    </div>
    <div class="sidebar-menu">
        <li class="item">
            <a href="index.php?halaman=report" class="menu-btn text-dark"> <i class="fas fa-desktop"></i><span>Report</span></a>
        </li>
        <li class="item">
            <a href="index.php?halaman=kategori" class="menu-btn text-dark"> <i class="fas fa-desktop"></i><span>Kategori</span> </a>
        </li>
        <li class="item">
            <a href="../logout.php" class="menu-btn text-dark"> <i class="fas fa-desktop"></i><span>Logout</span> </a>
        </li>
    </div>
</div>
<div class="maint-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            _Ineffable
        </h2>
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
            case 'Add_report':
                include "add_report.php";
                break;
        }
    }
    ?>
</div>
</body>

</html>