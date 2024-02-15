<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Enter the name of the person to delete.
        <form action="do_delete.php" method="post" 
              onSubmit="if(confirm('Are you sure?')) return true; return false;">
            Name: <input type="text" name="firstname" />
            <input type="submit" />
        </form>
        TODO: create php page that performs the delete and provides a link to the main menu.
    </body>
</html>
