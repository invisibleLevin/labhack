<?php 
    include 'connection.php';
    session_start();
    if(isset($_SESSION["username"]) != "login") {
        header("Location: login.php?message=must_login");
        echo "<script>alert('Oops, you must loginf first!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1 style="text-align: right;">Welcome, <?php echo $username = $_SESSION["username"];?></h1>
        <h2>GUESTBOOK DATA</h2>
        <button onclick="window.location.href='addGuestbook.php'">INSERT GUESTBOOK</button><br><br>
        <table class="guestbook_data"style="width: 100%;">
            <thead>
                <tr>
                    <th class="table_data">No</th>
                    <th class="table_data">Username</th>
                    <th class="table_data">Message</th>
                    <th class="table_data"colspan="2">Action</th>
                </tr>
            </thead>
            <?php 
                $query = "SELECT * FROM guestbook";
                $execute = mysqli_query($conns, $query);

                if(mysqli_num_rows($execute) > 0) {
                    while($data = mysqli_fetch_array($execute)) {
            ?>
            <tbody>
                <tr>
                    <td class="table_data"><?=$data['id'];?></td>
                    <td class="table_data"><?=$data['username'];?></td>
                    <td class="table_data"><?=$data['message'];?></td>
                    <td class="table_data"><a href="edit.php?id=<?=$data["id"]?>">Edit</a></td>
                    <td class="table_data"><a href="delete.php?id=<?=$data["id"]?>">Delete</a></td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
            <?php 
                }else{
            ?>
            <tbody>
                <tr>
                    <td colspan="4" class="table_data">Data are not available now!</td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
        </table>
    </div>
   
   <div id="message" class="footer">
        <P>Created by INTROSEC LAB HACKING</h1>
        <p>Our motivation are human rights, free from child violence, politics, a hero, money, and gain popularity</p>
        <p>All right reserved &copy; 2024</p>
    </div>
  
    
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
