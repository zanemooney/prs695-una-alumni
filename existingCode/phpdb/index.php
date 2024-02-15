<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h2>Welcome to The Super Secret Awesome Database of The SuperDuper Supermart Store!</h2>
        <h3>The password is NOT secret ! ;) </h3>



        <form method="post" action="authenticate.php">
            Username: <input type="text" name="uname" 
                             value="<?php
                             if (isset($_POST['uname'])) {
                                 echo $_POST['uname'];
                             }
                             //also here
                             ?>"><br>
            Password: <input type="password" name="pwd" value="<?php
            if (isset($_POST['pwd'])) {
                echo $_POST['pwd'];
            }
            ?>"><br> 
            <input type="submit" name="submit" value="Submit">
        </form>



    </body>
</html>
