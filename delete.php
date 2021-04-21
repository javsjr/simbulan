<?php
require('./database.php');
if(isset($_POST['delete'])){
    $deleteID = $_POST['deleteID'];
    
    $queryDelete = "DELETE FROM Account WHERE id = $deleteID";
    $sqlDelete = mysqli_query($connection, $queryDelete);

    echo '<script>alert("Successfully deleted")</script>';
    echo '<script>window.location.href = "/crud/index.php"</script>';
}else {
    echo '<script>window.location.href = "/crud/index.php"</script>';
}
?>