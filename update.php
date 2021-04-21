<?php 
require('./database.php');

if (isset($_POST['edit'])) {
    $editID = $_POST['editID'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
}
if (isset($_POST['update'])){
    $updateID = $_POST['updateID'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE Account SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateID";
    $sqlUpadte = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Successfully updated!")</script>';
    echo '<script>window.location.href = "/crud/index.php"</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" 	content="width=device=widhth, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> Update User </title>
</head>
<style>
html, body {
    margin: 0;
    padding: 0;
}
.main {
    height: 100vh;
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;
}
.main .update-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
}
.main .update-main h3{
    text-align: center;
}
</style> 
<body>

<div class="main">	
<form class ="update-main" action="/crud/update.php" method= "post">
    <h3>Update Account</h3>
    <input type= "text" name="updateUsername" placeholder="Enter new username" value="<?php echo $editUsername?>" required/>
    <input type= "password" name="updatePassword" placeholder="Enter new password" value="<?php echo $editPassword?>" required/>
    <input type= "submit" name="update" value="UPDATE" />   
    <input type= "hidden" name="updateID" value="<?php echo $editID ?>" />
  </form>
 </div>
</body>
</html>
	
