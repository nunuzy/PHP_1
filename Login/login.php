<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
    $error = '0';
    require_once('connect.php');
    if(isset($_POST['login'])){
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        if (($nama != "") & ($password !="")) {
            $sql = "SELECT * FROM user WHERE name='$nama' "; #&& password = '$password'
            $result = mysqli_query($con,$sql);
            if (!$result || mysqli_num_rows($result) == 0) {
                $error = "User tidak di temukan";
                mysqli_close($con);
            }else{
                $row = mysqli_fetch_assoc($result);
                $pas = $row['password'];
                if($pas == $password){
                    header('Location: proses.php');
                }else{
                    $error = "password salah";
                }
                mysqli_close($con);
            }

        }else{
            $error = "Nama Atau Password Kosong" ; 
        }
    }
?>
    <div>
        <form action="" method="POST">
            <h2>Login</h2>
            <table>
                <tr>
                    <td>Masukan Nama </td>
                    <td>: <input type="text" name="nama" placeholder="Masukan Nama"></td>
                </tr>
                <tr>
                    <td>Masukan Password</td>
                    <td>: <input type="password" name="password" placeholder="Masukan Password"></td>
                </tr>
            </table>
            <?php
            if($error != '0'){
                echo $error;
            }
            ?>
            <br>
            <input type="submit" value="Login" name="login">
            <br>
            Belum punya akun ? <a href="register.php">Register</a>
        </form>
    </div>

</body>
</html>