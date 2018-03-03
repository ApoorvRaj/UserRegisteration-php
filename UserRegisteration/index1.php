<html>
<head>
<link type="text/css" href="style.css" rel="stylesheet"/>
</head>
<body>
<h1>User Registration</h1>
<h3>insert records </h3>
<form action="insert.php" method="post">
<div class="container">
<div class="form_group">
<label>First name : </label>
<input type="text" name ="fname"/><br><br>
<label>Last name :  </label>
<input type="text" name="lname"/><br><br>
<label>Password : </label>
<input type="password" name="pass"/><br><br>
<label>Email           :  </label><input type="text" name="email"></br><br>
<label>Gender : </label><input type="radio">male <input type="radio">female<br><br>
<label>Address : </label><textarea rows="4" cols="30" name="add"></textarea><br><br>

<input type="submit"/>&nbsp;<input type="reset">
</div>
</div>
<h3>delete records</h3>
</form>
<div class="container">
<form action="delete.php" method="post">
<div class="form_group">
<label>first name : </label><input type="text" name ="fname"/><br><br>
<input type="submit"/>&nbsp;<input type="reset">
</div>
</div>
</form>
<h3>update records</h3>
<div class="container">
<form action="update.php" method="post">
<div class="form_group">
<label>first name : </label><input type="text" name ="fname"/><br><br>
<label>new password :  </label><input type="password" name="pass"/><br><br>
<input type="submit"/>&nbsp;<input type="reset">
</div>
</div>
</form>
<h3>retreive records</h3>
<div class="container">
<h4>retreive selected record</h4>
<form action="select1.php" method="post">
<div class="form_group">
<label>first name : </label><input type="text" name ="fname"/><br><br>
<input type="submit"/>&nbsp;<input type="reset">
</div>
</div>
</form>
<div class="container">
<h4>retreive all records</h4>
<form action="selectall.php" method="post">
<div class="form_group">
<input type="submit"/>&nbsp;
</div>
</div>
</form>
</body>
</html>