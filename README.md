# Zane Mooney's PRS695 Capstone Project 🔥🎆

I extend a warm welcome to Zane Mooney's pioneering Capstone Project developed for the Office of Alumni Relations at the University of North Alabama. This project, meticulously crafted for the esteemed Board of Trustees (BOT) of the National Alumni Association, introduces an innovative and secure login system, poised to redefine their digital experience significantly.

## User Story Card
**As..** Alumni Relations

**I want..** a secure login system ~~and admin panel~~ for the Alumni Association Board

**So That..** they may access their minutes and other resources AND submit their minutes to the alumni1@una.edu email. ~~AND allow the office to have full control on usernames.~~

## User Story Card
**As a..** Alumni Association Board member

**I want..** to easily login to my Alumni Association page

**So That..** I may access the minutes and other resources necessary for my duties.

# Project Components:

The project will consist of a login screen (login.html) for the Board of Trustees (BOT) for the National Alumni Association (NAA). There will be a prompt asking for a password and a login button, along with the other typical things standard UNA webpages have. Once the user presses the "Login" button, the passthrough code in the "alumni-board-login.html" will fire.

## Login Screen (live build: board-login.html):

_**Existing code that is live build (for the foundation's BOT login Page):**_
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

## Authentication Magic... well...

<p>Unfortunately, the existing system lacks robust security measures. The code, in its current state, is easily readable, allowing anyone to discern the password directly. The only semblance of security present is a superficial "lock" implemented by Cascade. This deficiency leaves the system vulnerable and underscores the critical need for substantial enhancements in security protocols. It is imperative to fortify the infrastructure, ensuring that confidential information remains safeguarded and inaccessible to unauthorized individuals. The absence of adequate security measures underscores the pressing requirement for a comprehensive and resilient solution to protect sensitive data and uphold the integrity of the system.</p>



## Vision for ACTUAL Authentication (Two Choices):

<h3>Option 1 | task size = M👚 [SELECTED]:</h3>

<p>We've opted for enhancing the current system while adding basic extra functionality to make the password less accessible.</p>

Simple code like:
```php
<!--#passthrough-top
<?php
  if(isset($_POST["password"]) && $_POST["password"] == "1830")
  {
    //header("Location: alumni/una-alumni-assoication/meetings.html");
    header('Location: meetings.html');
    exit; // Make sure to exit after redirection
  }
  else
  {
?>
<br>
Please enter your password. If you are having issues, please contact the Office of Alumni Relations.
<br>
<?php
  }
?>
#passthrough-top-->
```


<h3>Option 2 | task size = L👕:</h3>

<p>We make an entire CRUD database system using very basic PHP, SQL, and HTML.
  
**Functionality (Scope):**

1. **NEW LOGIN PAGE** (to accept php)
  
2. **CREATE** a new username (following a strict format: firstInitialfirstFourLettersOfLastName ex. zmoon)

3. **READ** existing usernames in "authenticate.php"
  
4. **UPDATE** existing usernames (in case of name change or a typo)

5. **DELETE** users to ensure no unauthorized users may enter the Board of Trustee's page (to the best of our abilities).

For proof of concept, we developed Option 2 despite the customer choosing Option 1. The files can be found [here](https://github.com/zanemooney/prs695-una-alumni/tree/main/existingCode/testCRUD). A render may be created for visual purposes.

## Capstone Potential:

<p>In option 1, Zane showcases the process of parsing user inputs, extracting an encrypted password, validating the user's input, and directing the user to the Board of Trustees' index page.

With option 2, this Capstone Project demonstrates Zane's dedication to refining user authentication for the Board of Trustees, combining aesthetic appeal with advanced functionality. The proposed enhancements align with contemporary security practices, ensuring a robust and future-proof solution for the University of North Alabama's Office of Alumni Relations.

Both options hold immense potential to serve as compelling proof of concept, showcasing Zane's technical acumen and expertise. Beyond being a mere demonstration, they can yield a fully realized product with practical utility for real-world consumers. By implementing either option, Zane not only demonstrates his proficiency but also produces a solution that addresses tangible needs, making a meaningful impact for the end-users in a real-world context. This combination of theoretical strength and practical application solidifies the project's significance in showcasing Zane's capabilities in technology and software development.
</p>

