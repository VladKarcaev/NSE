<html>

<body>
<form action="reg/login.php" method="post">

<h3>Login</h3>

 <p>
    <label>Your Login:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
	
    <p>
 
    <label>Your Password:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
    <p>
    <input class='submit' type="submit" name="submit" value="Login">
<br>
    </p></form>
    <br>
    <?php
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    echo "You are logged in as Guest<br>";
    }
    else
    {
    echo "You are logged, in  ".$_SESSION['login']."<br>";
    }
    ?>
    </body>
    </html>