# Login System

---

I have developed a comprehensive login system using HTML, PHP, Bootstrap, and MySQL. The system features a user-friendly landing page with a logo and navigation bar, housing two input fields for username and password, along with convenient login and signup buttons. Upon clicking the signup button, users are seamlessly directed to a signup form where they can enter their desired username, email, and password, confirming the password for security.

Once logged in, users are greeted with a personalized welcome message featuring their username. The system goes the extra mile by adding a touch of warmth, displaying Volkswagen pictures to enhance the welcoming experience. My project showcases the integration of front-end technologies like HTML and Bootstrap with back-end functionality powered by PHP and a MySQL database, resulting in a polished and user-centric login system.


Here is how i created the users table
```
CREATE TABLE users (
	idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers LONGTEXT NOT NULL
);
```