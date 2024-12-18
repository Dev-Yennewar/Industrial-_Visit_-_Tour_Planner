<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: home.html");
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: home.html");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}
?>

<style>
   *{
        margin: 0%;
        padding: 0%;
    }
.background {
  background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url("./images/pex1.jpg");
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
input[type=email] {
    width:200px;
    height:30px;
    padding-bottom: 8px;
}
input[type=password] {
    width:200px;
    height:30px;
    padding-bottom: 8px;
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
.login-register-text{
    padding-top:7px;
}
</style>

<body>
   <div class="background">
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-field">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
             </div>
             <div class="input-field">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
             </div>
             <div class="input-field">
             <input type="submit" name="submit" value="Login">
             </div>
            <center><p class="login-register-text">Don't have an account? <a href="index.php">Sign Up</a>.</p>
        </form>
    </div>
</div>
</body>
</html>
