<?php
session_start();
include 'class.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    
    $login = new JoBogor('pelamar');
    $logins = $login ->login("$email","$password");
    if ($logins){
        $id = $login->getdata('email',$email);
        $_SESSION["iduser"] = $id['idpelamar']; 
        //echo $_SESSION["iduser"];
        header('Location: lowongan.html');
    }else {
        $_SESSION['error'] = "username dan password salah";
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>JoBogor | Lowongan</title>
</head>

<body>
    <span class="logo">
        <a href="index.html">
            <img src="img/jobogor.png" alt="">
        </a>
    </span>
    <div class="login">
        <div class="form">
            <div class="form-title">
                <h1>LOGIN</h1>
                <h5>Tetap Terhubung Untuk Pekerjaan Impian Anda</h5>
                <h5> <?php echo $_SESSION['error']; ?>
            </div>
            <form action ="login.php" method ="POST">
                <input type="email" id="email" name="email" placeholder="Input Your Email.." required>
                <input type="password" id="password" name="password" placeholder="Input Your Password.." required>
                <h6>Belum Punya Akun? <a href="signup.html">Buat Akun</a></h6>
                <input type="submit" value="Submit">
            </form>

        </div>
    </div>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>
    <footer>
        <p>awe design, copyright &copy; 2019</p>
    </footer>
</body>

</html>