---
layout: page
title: Contact
---

<h1>HTML Form That Opens Email Client </h1>
  
<p>This form opens up the submitter's email client, prompting them to send you a copy of their responses. </p>
 
<!--Form Code--> 
<form action=”mailto:contact@yourdomain.com”


method=”POST”


enctype=”text/plain”


name=”EmailForm”>


<label for="name">Name:</label><br>
<input type="text" id="name" name="name"><br>


<label for="ContactCommentt">Message:</label><br>
<textarea id=”ContactCommentt” rows=”6″ cols=”20″>

<input type="submit" value="Send">
</form>
