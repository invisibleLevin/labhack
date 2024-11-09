<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="og:description" content="Our motivation are human rights, free from child violence, politics, a hero, and gain popularity">
    <meta name="title" content="FAKE GOVERMENT WEBSITE">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/fake-seal-usa.png" type="image/x-icon">
    <title>FAKE GOVERMENT WEBSITE!</title>
</head>
<body>
    <div class="login-form">
        <h1 class="login-title">LOGIN NOW!</h1>
        <form action="#" method="POST">
        <div class="imgcontainer">
            <img src="img/fake-seal-usa.png" class="avatar">
        </div>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <input type="submit" value="sent" name="sent">
            <label>
                
            </label>
        </div>
        </form>
    </div>
    
     <div id="message" class="footer">
        <P>Created by INTROSEC LAB HACKING</h1>
        <p>Our motivation are human rights, free from child violence, politics, a hero, money, and gain popularity</p>
        <p>All right reserved &copy; 2024</p>
    </div>

    <?php 
        if(isset($_POST['sent'])) {
            session_start();
            $username = $_POST["username"];
            $password = md5($_POST["password"]);

            $query = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
            $execute = mysqli_query($conns, $query);
            $fetch_data = mysqli_num_rows($execute);
            if($fetch_data > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['status'] = 'login';
                header("Location: data.php?status=Valid_credentials");
            }else{
                echo "<script>alert('Wrong credentials')</script>";
            }
        }
    ?>
</body>
</html>