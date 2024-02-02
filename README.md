# Zane Mooney's PRS695 Capstone Project

I extend a warm welcome to Zane Mooney's pioneering Capstone Project developed for the Office of Alumni Relations at the University of North Alabama. This project, meticulously crafted for the esteemed Board of Trustees (BOT) of the National Alumni Association, introduces an innovative and secure login system, poised to redefine their digital experience significantly.

## Project Components

The project will consist of a login screen (login.html) for the Board of Trustees (BOT) for the National Alumni Association (NAA). There will be a prompt asking for a username and a login button, along with the other typical things standard UNA webpages have. Once the user presses the "Login" button, it will go fire into "login.php" 

### Login Screen (login.html)

### Authentication Magic

```php
<?php
  if($_POST["password"] == "1830")
  {
    include("board-members-only/board-resources.html");
  }
  else
  {
?>
The password is incorrect. Please contact Amy Bishop at abishop3@una.edu for help.
<?php
  }
?>
```

#### Vision for Authentication (Two Choices)

<h4>Option 1 | task size = S</h4>
We stick to the current system we have, however, we (at least) add some basic form of encryption so that the password is not easily accessible (extra brownie points) 

Simple code like:
```php
<?php
  pass = sha256("1830")
```
Thanks, Cumbie for the reminder!

<h4>Option 2 | task size = L</h4>
We make an entire CRUD database using very basic php, sql, and html.
**Functionality (Scope):**
