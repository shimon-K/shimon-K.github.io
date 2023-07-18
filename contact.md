---
layout: page
title: Contact
---



<h2>Contact Form</h2>

<form action="/send-email.php" method="POST">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required>

  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required>

  <label for="message">Message:</label><br>
  <textarea id="message" name="message" required></textarea>

  <button type="submit">Send</button>
</form>


