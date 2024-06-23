<?php
 include "../lib/koneksi.php";
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body> 
    <div class="container">
        <input type="checkbox" id="check" />
        <div class="login form">
            <header>SMARTCLEAN-AC</header>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required />
                <input type="password" name="password" placeholder="Enter your password" required />
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login" name="btn" />
            </form>
            <div class="signup">
                <span class="signup">
                    Don't have an account?
                    <label for="check">Signup</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <form action="" method="post">
                <input type="text" placeholder="Enter your fullname" name="nama" required/>
                <input type="email" placeholder="Enter your email" name="email" required/>
                <input type="password" placeholder="Create a password" name="password" required/>
                <input type="submit" class="button" value="SigInUP" name="daftar" />
            </form>
            <div class="signup">
                <span class="signup">
                    Already have an account?
                    <label for="check">Login</label>
                </span>
            </div>

            <?php 
            if (isset($_POST['daftar'])){
              $nama = $_POST['nama'];
              $email = $_POST['email'];
              $password = md5($_POST['password']);

              $sql = $con->query("INSERT INTO user (nama_lengkap, password, email) VALUES ('$nama','$password','$email')");
              if($sql){
                echo "<script>alert('Daftar Berhasil');document.location.href='login.php'</script>";
              }else{
                echo "<script>alert('Daftar Gagal');</script>";
              }
            }
            ?>
        </div>
    </div>

    <?php 
    if (isset($_POST['btn'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = $con->query("SELECT * FROM user WHERE email='$email' and password='$password'");
        $row = $sql->num_rows;
        $result = $sql->fetch_array();
        if ($row > 0) {
            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['nama_lengkap'] = $result['nama_lengkap'];
            echo "<script>alert('Login Berhasil');document.location.href='../index.php'</script>";
        } else {
            echo "<script>alert('Login Gagal');</script>";
        }
    }
    ?>
</body>
</html>