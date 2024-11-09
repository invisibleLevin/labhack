<?php 
    include 'connection.php';
    if(isset($_SESSION['username']) != "login") {
        header("Location: login.php?message=must_login");
        echo "<script>alert('Oops, you must loginf first!')</script>";
    }
?>
<?php 
    include 'connection.php';
    $id = $_GET["id"];
    $query = "DELETE FROM guestbook WHERE id=$id";
    $data = mysqli_query($conns, $query);
    if($data) {
        header("Location: data.php?status=success");
    }else{
        header("Location: data.php?status=failed");
    }
?>