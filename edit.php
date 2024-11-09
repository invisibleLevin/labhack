<?php 
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/fake-seal-usa.png" type="image/x-icon">
    <title>FAKE GOVERMENT WEBSITE!</title>
</head>
<body>
    <div id="mySidenav" class="sidenav">    
      <a href="data.php" id="guestbook">Guestbook</a>
      <a href="logout.php" id="logout">Log out</a>
    </div>
    <div class="topnav" id="Topnav">
        <a href="#home" class="active">FAKE SYSTEM</a>
        <a style="float: right;" id="btn">HIT HINT</a>
        <div id="modals" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Find the Vulnberality</h2>
                <p>You may hack the goverment website. Think and hack the goverment site system</p>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="responsiveNav()">
          <i class="fa fa-bars"></i>
        </a>
    </div>
    <?php 
        include 'connection.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM guestbook WHERE id = $id";
        $execute = mysqli_query($conns, $query);
    ?>
    <div style="padding: 0 80px;">
        <h1>Edit Data</h1>
        <?php while($guestbook_data = mysqli_fetch_array($execute)) {?>
            <form action="#" method="POST">
                <input type="hidden" name="id" value="<?=$guestbook_data['id'];?>">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" id="username"value="<?=$guestbook_data['username'];?>"></td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td><textarea name="message" id="message"value="<?=$guestbook_data['message'];?>"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="sent" id="sent"></td>
                    </tr>
                </table>
            </form>
        <?php } ?>
    </div>
    <?php 
        if(isset($_POST["sent"])) {
            $id = $_POST["id"];
            $username = $_POST["username"];
            $message = $_POST["message"];

            $query = "UPDATE guestbook SET username='$username', message='$message' WHERE id = $id";
            $execute = mysqli_query($conns, $query);
            
            if($query) {
                header("Location: data.php?success");
            }else{
                echo "<script>alert('Failed update data!')</script>";
            }
        }
    ?>
</body>
</html>