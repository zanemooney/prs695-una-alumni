<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con = mysql_connect("localhost", "root", "");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("<DB name>", $con);

        $result = mysql_query("select count(*) from person");
        
        $row = mysql_fetch_array($result);

        print_r($row);
        
        echo "If your server is running and you have created your database 
            correctly, you should see 16 rows here: $row[0] rows found.";

        mysql_close($con);
        ?>
        
<!-- mainContent | display page -->
<div class="mainContent col-xs-12 col-sm-12 col-md-9" role="main">
                        <h1>Board Login</h1>
                        <section class="col-md-12">
                            Welcome, Foundation Board Member. Please login to access your board meeting resources! <br/>
                            <br/>
                            <form action="login.php" method="post">
                                <input name="password" type="password"/>
                                <input type="submit" value="Login"/>
                            </form>
                        </section>
                        <br/>
                        <br/>
                    </div>
        </ul>
    </body>
</html>
