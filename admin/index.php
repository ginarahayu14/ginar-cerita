<?php
    include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
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


            