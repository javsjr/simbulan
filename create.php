<?php
require('./database.php');

if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $queryCreate = "INSERT INTO Account VALUES (null, '$username', '$password')";
    $sqlCreate = mysqli_query($connection, $queryCreate);

    echo '<script>alert("Successfully created!")</script>';
    echo '<script>window.location.href = "/crud/index.php"</script>';
}else {
    echo '<script>window.location.href = "/crud/index.php"</script>';
}

?>