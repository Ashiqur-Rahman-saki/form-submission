<!DOCTYPE HTML>
<html lang="en-US">
<html>
<head>

<h1>Registration  Form</h1>

</head>
<body>
	<form action="<?php echo htmlspecialchars(($_SERVER['PHP_SELF']))?>" method="POST">
<fieldset>
<legend>Basic Information</legend>
<input type="text"placeholder="First name"/>


<input type="text"placeholder="Last name"/>
<br>
</br>
<level>Gender:</level><br>
<input type="radio"name="sex"/>Male
<input type="radio"name="sex"/>Female
</br><br>
<label for="birthday">Birthday:</label>

<br>
</br>
<input type="date" id="birthday" name="birthday">
<br>
<br/>
<label for="cars">Choose a religion:</label>

<select name="religion" id="religion">
  <option value="Islam">Islam</option>
  <option value="Hidusm">Hindusm</option>
  <option value="mercedes">Christian</option>
  <option value="audi">Athiest</option>
</select>
</fieldset>
<br>
</br>
<fieldset>
<legend>Contact Information</legend>
<address>
<label for=" Present address">Present ddress:</label>

<textarea id="presentaddress" name="presentaddress" rows="2" cols="20"></textarea><br>

</textarea><br>
<address>
<label for=" Permanent address"> Permanent address:</label>

<textarea id="Permanentaddress" name="Permanentaddress" rows="2" cols="20"></textarea><br>

</textarea>
</address>
<br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
<br>
<label for="phone">Enter your phone number:</label><br>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
<br>
<a href="https://www.w3schools.com/html/html_links.asp">link text</a><br>

</fieldset>
<fieldset>
<legend> Account Information</legend>
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="pwd"><br>
<br>
<label for=" username"> Username:</label>

<input type="text"/>
</fieldset>
</br>
<label for="Link">Personal Website Link : </label>
		 <input type="Link" name="Link" required><br>
<button type="submit" form="form1" value="Submit">Submit</button><br>
</br>
</form>
</body><br>

<html>