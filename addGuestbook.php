<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="og:description" content="Our motivation are human rights, free from child violence, politics, a hero, and gain popularity">
    <meta name="title" content="FAKE GOVERMENT WEBSITE">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/fake-seal-usa.png" type="image/x-icon">
    <title>FAKE GOVERMENT WEBSITE!</title>
</head>
<body>
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
    <div id="mySidenav" class="sidenav">    
      <a href="data.php" id="guestbook">Guestbook</a>
      <a href="logout.php" id="logout">Log out</a>
    </div>
    <div style="padding: 0 80px;">
        <h1>INSERT GUESTBOOK</h1>
        <form method="POST" action="addGuestbook.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>: </td>
                    <td><input type="text" name="username" id="username" placeholder="username"></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>: </td>
                    <td><textarea name="message" id="message" placeholder="input message"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td> <br><input type="submit" value="sent" name="sent"></td>
                </tr>
                
            </table>
        </form>
    </div>
     
    <?php 
        if(isset($_POST["sent"])) {
            include 'connection.php';
            $username = $_POST["username"];
            $message = $_POST["message"];
            $query = "INSERT INTO guestbook(username, message)VALUES('$username', '$message')";
            $proccess = mysqli_query($conns, $query);

            if($proccess) {
                header("Location: data.php?success");
            }else{
                header("Location: data.php?failed");
            }
        }
    ?>
      <script>
        var modal = document.getElementById("modals");
        var btn = document.getElementById("btn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display="block";
        }
        span.onclick = function() {
            modal.style.display="none";
        }
        window.onclick = function(event) {
            if(event.target == modal) {
                modal.style.display = "none";
            }
        }
   </script>
   <script>
        function responsiveNav() {
          var x = document.getElementById("Topnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
    </script>
</body>
</html>