<html>
<head>
<title>Contact Us</title>
<link href="style.css" rel="stylesheet" type="text/css">
<head>
<style>
     *{
        margin: 0%;
        padding: 0%;
    }

    body{
        background-color:#007bff;
        
    }

    .navbar {
  display: flex;
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

#logo {
  margin: 12px 20px;
}

#logo img {
  height: 50px;
  margin: 2px 8px;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 32px 20px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 32px 20px;
  background-color: inherit;
  font-family: inherit;
  /* Important for vertical align on mobile phones */
  margin: 0;
  /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover,
.dropdown:hover .dropbtn {
  background-color: red;
  border-radius: 20px;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;

}
.background {
  background-image: linear-gradient(rgba(9, 5, 54, 0.3), rgba(5, 4, 46, 0.7)), url("./images/pex2.jpg");
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
.container {
  border-radius: 5px;
  width:400px;
  background-color: #f2f2f2;
  padding: 20px;
}
input[type=text] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.input-field textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
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
  color:white;
}
</style>
</head>
<body>
<div class="navbar">
        <div id="logo">
            <img src="./images/logo.png" alt="IV&TP.com">
        </div>
        <a href="home.html">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Destination
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="nagpur.html">Nagpur</a>
                <a href="aurangabad.html">Aurangabad</a>
                <a href="pune.html">Pune</a>
            </div>
        </div>
        <a href="aboutus.html">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="logout.php">Logout</a>
</div>

 <div class="background">
<div class="container">
<form method="POST" action="process.php">
<h1>Contact Us</h1>
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name.." required>

    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name.." required>

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone number.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <div class="input-field">
    <label for="message">Message</label>
    <textarea type="message" name="message" id="message" name="message" placeholder="Write something.." style="height:50px" required></textarea>
    </div>
    <input type="submit" value="Send">
  </form>
</div>
</body>
</html>
