<?php
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['message'])) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];

  echo "<p>Name: $name</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Message: $message</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="topnav">
      <a href="index.html">Home</a>
      <a href="contact.php">Contact</a>
    </div>
    <div class="content">
      <form id="contactForm" method="GET" action="contact.php">
        <div>
          <label for="name">Name</label><br>
          <input type="text" id="name" name="name" placeholder="Your Name" />
        </div>
        <div>
          <label for="email">Email</label><br>
          <input type="email" id="email" name="email" placeholder="Your Email" />
        </div>
        <div>
          <label for="message">Message</label><br>
          <textarea id="message" name="message" placeholder="Your Message"></textarea>
        </div>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </div>
</body>
</html>