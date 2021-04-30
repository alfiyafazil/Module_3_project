<!DOCTYPE html>
<html>
    <head>
        <title>Online Travel Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="nav-bar">
                <div class="nav-container">
                    <a id="log" href="index.php"><img id="logo" src="images/logo.png"></a>
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="#">Tour Packages</a>
                    <a href="contact.php">Contact Us</a>

                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign In / Sign Up</button>
                </div>
            </div>
        </header>
        <div id="id01" class="modal">
            <hr/>
            <div class="login">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form  class="modal-content" action="login.php" autocomplete="on"> 
                    <h1 id="logintitle">Log in</h1> 
                    <p> 
                        <label for="email" class="email">Email</label><br/>
                        <input id="email" name="email" required="required" type="text" placeholder="e.g. rahul@mail.com"/>
                    </p>
                    <p> 
                        <label for="password" class="passwd" >Password </label>
                        <input id="password" name="password" required="required" type="password" placeholder="my secret code" /> 
                    </p>
                    <p>
                    <a class="forgot" href="#">Forgot password?</a>
                    </p>
                    <p> 
                    <button type="submit" class="loginbtn">Continue</button>
                    </p>
                    <p>
                    <a class="adm-log" href="admin.php">---------Or Login as Admin-----------</a>
                    </p>
                </form>
            </div>
            <div class="signup">
                <form action="login.php" autocomplete="on"> 
                <h1 id="signuptitle">New To Our Website?</h1> 
                <p>
                    <label for="fname" class="fname">Full Name</label><br/>
                    <input id="fname" name="fname" required="required" type="text" placeholder="Enter your Full Name"/> 
                </p>
                <p>
                    <label for="signemail" class="signemail">Email</label><br/>
                    <input id="signemail" name="signemail" required="required" type="text" placeholder="Email Id"/>
                </p>
                <p>
                    <label for="mob" class="mob">Mobile Number</label><br/>
                    <input id="mob" name="mob" required="required" type="text" placeholder="Mobile Number"/> 
                </p>
                <p>
                    <label for="psw">Password</label><br/>
                    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
                </p>
                <p>
                    <label for="confirmpsw">Confirm Password</label>
                    <input id="confirmpsw" type="password" placeholder="Confirm Password" name="confirmpsw" required>
                </p>
                <p>
                    <button type="submit" class="signupbtn">Sign Up Now</button>
                </p>
                </form>
            </div>
        </div>
        </body>
</html>