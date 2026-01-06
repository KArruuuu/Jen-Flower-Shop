<?php    
    //include 'connect.php';    
    //require_once 'includes/header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
</head>
<body>
    <div class="bg"></div>
    <div class="content">
        <div class="form-container">
            <form method="post">
                <h2>Login</h2>
                <input type="text" name="txtusername" placeholder="Username" required>
                <input type="password" name="txtpassword" placeholder="Password" required>
                <button type="submit" class="loginbtn" name="btnLogin">Log In</button>
            </form>
			<p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>

    <?php
   
    if(isset($_POST['btnLogin'])){		
        $uname = $_POST['txtusername'];		
        $pword = $_POST['txtpassword'];		

        $sql = "SELECT * FROM tbluseraccount WHERE username='$uname' AND password='$pword'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            echo "<script language='javascript'>
                        alert('Login successful. Welcome, ".$uname."!');
                  </script>";
            //header("location: dashboard.php");
        }else{
            echo "<script language='javascript'>
                        alert('Invalid username or password.');
                  </script>";
        }		
    }
    
    ?>

    <?php //require_once 'includes/footer.php'; ?>
</body>
</html>