<?php include("header.php");
?>
<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css" />

    
    </head>
<div id="section">
<div class="container">
    <form method="post" action="adduser.php">
        <h2 class="text-center mb-4">Pendaftaran Akun</h2><br>
        <label class="text-center mb-4">Username:</label><br>
        <input type="text" id="username" name="username" required maxlength="100"><br>
        <label class="text-center mb-4">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label class="text-center mb-4">Nama:</label><br>
        <input type="text" id="nama" name="nama" required maxlength="100"><br>
        <label class="text-center mb-4">Password:</label><br>
        <input type="password" id="password" name="password" required maxlength="100"><br>
        <input type="submit" value="Daftar" id="daftar"><br>
    </form>
</div>
</html>
<?php include("footer.php");
?>
