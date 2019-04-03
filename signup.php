<?php include 'class.php';?>
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
    <div class="signup">
        <div class="form">
            
                <div class="form-title">
                    <h1>DAFTAR</h1>
                    <h5>Tersedia banyak pilihan pekerjaan dengan pendapatan dan karir yang menjanjikan</h5>
                </div>

            <div class="input">
             <form action="signup.php" method="post" enctype="multipart/form-data">
            
                   <input type="text" value="sdfasf" name="name" placeholder="Input Your Name.." required>
                    <input type="text" value="sdfasf" name="email" placeholder="Input Your Email.." required>
                    <input type="text" value="sdfasf" name="phone" placeholder="Input Your phone.." required>
                    <input type="text" value="sdfasf" name="address" placeholder="Input Your Address.." required>
                    <input type="text" value="sdfasf" name="education" placeholder="Input Your Education.." required>
                    <input type="password" value="sdfasf" name="password" placeholder="Input Your Password.." required>
                  

              
                <div class="input-container">
                        
               
                        <label for="fileSelect">Photo</label>
                        <input type="file" name="photo" id="fileSelect">
               
        
               
                    <label for="fileSelect">Appletter</label>
                    <input type="file" name="appletter" id="fileSelect">
                
                                
                        <label for="fileSelect">CV:</label>
                        <input type="file" name="CV" id="fileSelect">
              
                        <span class="file-info">Upload a file</span>
                    </div>
                    <h6>Sudah Terdaftar? <a href="login.html">Masuk Sekarang</a></h6>
                    <input type="submit" value="Submit">
            </form>
            </div>
            
        </div>
    </div>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="script.js"></script>
    <footer>
        <p>awe design, copyright &copy; 2019</p>
    </footer>
</body>

</html>
<?php
if ((isset($_POST['name'])) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['education']) && ($_POST['password'])){

 $name = ($_POST['name']);
 $email = ($_POST['email']);
 $phone = ($_POST['phone']);
 $address = ($_POST['address']);
 $education = ($_POST['education']);
 $password = ($_POST['password']);

 $signup = new JoBogor('pelamar');
 $signup ->imageupload();
 //$signup -> insert("'idpelamar', 'nama', 'address', 'email', 'password', 'phone', 'photo', 'cv', 'appletter', 'education'", "NULL, '$address', '$address', '$email', '$password', '$phone', 'pel-1', 'cv-1', 'al-1', '$education'" );
}

?>