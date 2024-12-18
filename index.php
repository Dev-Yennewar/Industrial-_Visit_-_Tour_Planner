<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: home.html");
                echo "<script>alert('Your Registration Completed.')</script>";
            }
            else {
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
            }

        }
        else {
            echo "<script>alert('This Email Already Exists.')</script>";
        }
    }
    else {
        echo "<script>alert('Password is incorrect.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
<title>SignUp-IN&VT</title>
<style>

    *{
        margin: 0%;
        padding: 0%;
    }
.background {
  background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url("./images/pex.jpg");
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding-top: 40px;
}

.container{
  max-width: 300px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 5px;
}


.container p{
  text-align: center;
  margin-bottom: 20px;
}
.input-field{
border-radius: 15px;
padding-top: 8px;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
  color: white;
}
.input-btn{
    padding-top: 8px;
}

</style>
</head>
<body>
    <div class="background">

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Sign Up</p>
            <div class="input-field">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-field">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-field">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-btn">
            <input type="submit" name="submit" class="btn" value="Signup">
            </div>
            <center><p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
    </div>
</div>
</body>
</html>