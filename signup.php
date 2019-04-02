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
             <form action="login.php" method="post" enctype="multipart/form-data">
            
           <!--           <input type="text" name="name" placeholder="Input Your Name.." required>
                    <input type="text" name="email" placeholder="Input Your Email.." required>
                    <input type="text" name="phone" placeholder="Input Your phone.." required>
                    <input type="text" name="address" placeholder="Input Your Address.." required>
                    <input type="text" name="education" placeholder="Input Your Education.." required>
                    <input type="password" name="password" placeholder="Input Your Password.." required>
               -->    
                   
              
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