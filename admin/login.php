<?php
    session_start();
    if (!empty($_SESSION['admin']['id'])) {
        header("location: index.php");
    }
?>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
    }

    section .img-box {
        position: relative;
        width: 50%;
        height: 100%;
    }

    section .img-box:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #ff9f1c, #2ec4b6);
        z-index: 1;
        mix-blend-mode: screen;
    }

    section .img-box img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    section .content-box {
        display: flex;
        width: 50%;
        height: 100%;
        justify-content: center;
        align-items: center;
    }

    section .content-box .form-box {
        width: 50%;
    }

    section .content-box .form-box h2 {
        color: #166d67;
        font-weight: 600;
        font: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #ff9f1c;
        display: inline-block;
        letter-spacing: 1px;
        justify-content: center;
        align-items: center;
    }

    section .content-box .form-box .input-box {
        margin-bottom: 20px;
    }

    section .content-box .form-box .input-box span {
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #0a3c38;
        font-weight: 600;
        letter-spacing: 1px;
    }

    section .content-box .form-box .input-box input {
        width: 100%;
        padding: 10px 20px;
        outline: none;
        font-weight: 400;
        border: 1px solid #0a3c38;
        font-size: 16px;
        letter-spacing: 1px;
        color: #2ec4b6;
        background: transparent;
        border-radius: 30px;
    }

    section .content-box .form-box .input-box input[type="submit"] {
        background: #2ec4b6;
        color: #166d67;
        border: none;
        outline: none;
        font-weight: 500;
        cursor: pointer;
    }

    section .content-box .form-box .input-box input[type="submit"]:hover {
        background: #33e2d2;
    }

    section .content-box .form-box .remember {
        margin-bottom: 10px;
        color: #0a3c38;
        font-weight: 400;
        font-size: 14px;
    }

    section .content-box .form-box .input-box p {
        color: #0a3c38;
    }

    section .content-box .form-box .input-box p a {
        color: #2ec4b6;
    }

    @media (max-width: 768px) {
        section .img-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        section .content-box {
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        section .content-box .form-box {
            width: 100%;
            padding: 40px;
            margin: 50px;
            background: #ffffffb5;
        }
    }

    section .content-box .form-box .logo {
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    section .content-box .form-box .logo img {
        width: 20%;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    /*PROFILE*/
    .sampul {
        background: url(images/bg-profil.png) 50% 50% no-repeat;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .profile-image-content {
        object-fit: cover 50% 50% no-repeat;
        width: 150px;
        height: 150px;
        /*	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    }

    .profile-image-content-2 {
        object-fit: cover 50% 50% no-repeat;
        width: 200px;
        height: 200px;
        /*	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
    }

    .user-dropdown {
        border-bottom: 5px;
    }

    .dropdown-item a {
        text-decoration: none;
        color: #000;
    }

    .nav-item-black a {
        color: #000;
    }

    .card-img-top {
        object-fit: cover 50% 50% no-repeat;
        height: 150px;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 18px;
            padding-left: 18px;
        }

        .content-cari {
            padding-left: 150px;
            padding-right: 150px;
            padding-top: 50px;
        }
    }

    .right-detail-content .right-title hr {
        margin-bottom: 22px;
    }

    .button-komen {
        opacity: 0;
    }

    .text-komen:focus+.button-komen {
        opacity: 1;
    }
</style>
<?php
include "../db/koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <section>
        <div class="img-box">
            <img src="../images/read-ebook.jpg">
        </div>
        <div class="content-box">
            <div class="form-box">
                <div class="logo">
                    <center>
                        <img src="../images/ine-logo.png"><br>
                        <h2>Masuk</h2>
                    </center>
                </div>
                <form action="cek_login.php" method="post">
                    <div class="input-box">
                        <span>Email</span>
                        <input type="email" name="email">
                    </div>

                    <div class="input-box">
                        <span>Kata sandi</span>
                        <input type="password" name="password">
                    </div>

                    <div class="remember">
                        <label><input type="checkbox" name="">Ingatkan saya</label>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Masuk" name="login">
                    </div>


                </form>
            </div>
        </div>
    </section>
</body>

</html>