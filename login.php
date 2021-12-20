<?php include("header.php");
if(!empty($_SESSION['username'])){
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
      
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<div id="section">
    <div class="container">
    <form method="post" action="cek-login.php">
        <h2 class="text-center mb-4">Login</h2>
        <label class="text-center mb-4">Username/email:</label><br>
        <input type="text" id="username" name="username" required maxlength="100"><br>
        <label class="text-center mb-4">Password:</label><br>
        <input type="password" id="password" name="password" required maxlength="100"><br>
        <input class="text-center mb-4" type="submit" value="Login" id="login"><br>
    </form>
    <p class="mb-6">Belum terdaftar? daftar <a href="registrasi.php">di sini</a></p>
</div>
<?php include("footer.php");
?>