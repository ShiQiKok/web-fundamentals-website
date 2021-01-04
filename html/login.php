<!-- 
Creation date: 23/07/2020
Last modified: 24/07/2020 
-->
<?php
error_reporting(0);
$message="";
if(count($_POST)>0) {
	$handle = mysqli_connect("localhost","root","","meWe");
	$result = mysqli_query($handle,"SELECT * FROM users WHERE username='" . $_POST["username"] . "' and u_password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "Logged in successfully!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>meWE - Login</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" href="../images/favicon.svg" type="image">
    <script src="../functions/login.js"></script>
    <script src="../functions/menu.js"></script>
</head>

<body>

    <div class="navigation_bar">
        <span onclick="menu_show()" class="menu_icon"><img src="../images/menu.svg" alt="menu_icon" width="50px"></span>
        <div class="logo">
            <a href="../index.html"><img src="../images/meWE.svg" alt="logo" width="100px" height="40px"></a>
        </div>
         <nav class="links" id="nav_bar">
            <ul class="center">
                <li><a href="../index.html">Home</a></li>
                <li><a href="awareness.html">Awareness</a></li>
                <li class="dropdown"><a href="learn_more.html">Mental Illness</a>
                    <ul class="dropdown_content">
                        <li><a href="mood_disorders.html">Mood Dirsorders</a></li>
                        <li><a href="anxiety_disorders.html">Anxiety Disorders</a></li>
                        <li><a href="eating_disorders.html">Eating Disorders</a></li>
                        <li><a href="schizopherenia.html">Schizophrenia</a></li>
                    </ul>
                </li>
                <li><a href="treatment.html">Treatment</a></li>
                <li><a href="caregivers.html">Caregiver</a></li>
             </ul>
        </nav>
        
        <a href="login.php"><img src="../images/account.svg" alt="login_icon" class="login_icon"></a>
    </div>
    <main>
        <br>
        <div class="form">
                <h1>Log in</h1>
                <div class="message"><?php if($message!="") { echo $message; } ?></div>
                <form name="login_form" action="" method="POST" onsubmit="return validate()">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Your username">
                        <label for="pw">Password</label>
                        <input type="password" id="pw" name="password" placeholder="Your password">
                        <button type="submit" id="submit_button">Submit</button>
                </form>
                    
                <div style="text-align: center;">
                    <span><a href="signup.html" class="link">Don't have an account?</a></span>
                </div>
            </div>
        </div>
        <br>
    </main>

    <footer>
        <img src="../images/meWE.svg" alt="logo">

        <ul class="footer_nav">
            <li><a href="meWE.html">About meWE</a></li>
            <li><a href="../index.html">Home</a></li>
            <li><a href="awareness.html">Awareness</a></li>
            <li><a href="learn_more.html">Mental Illness</a></li>
            <li><a href="treatment.html">Treatment</a></li>
            <li><a href="caregivers.html">Caregiver</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
        <div>
            <a href=""><img src="../images/facebook.svg" alt="facebook"></a>
            <a href=""><img src="../images/instagram.svg" alt="instagram"></a>
            <a href=""><img src="../images/twitter.svg" alt="twitter"></a>
            <a href=""><img src="../images/whatsapp.svg" alt="whatsapp"></a>
            <a href=""><img src="../images/pinterest.svg" alt=""></a>
        </div>
    </footer>
    

</body>
</html>
