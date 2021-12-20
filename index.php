<?php 
include("header.php");
?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SELAMAT DATANG</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <script type="text/javascript" src="javascript.js"></script>
    
  </head>
  <body>
  <script>    
        var i = 0;
	var txt = 'Location : Malang | OPEN : 11.00 AM WIB | CLOSE : 11.00 PM ';
	var speed = 100;

	function typeWriter() {
	  if (i < txt.length) {
	    document.getElementById("demo").innerHTML += txt.charAt(i);
	    i++;
	    setTimeout(typeWriter, speed);
	  }
	}
  
</script>
    <div class="wrapper">
      <!-- untuk home -->
      <section id="home">
        <img src="coffee.jpg" width="600" height="400" />
        <div class="kolom">
          <p class="deskripsi">Hi, We're Opened</p>
          <button onclick="typeWriter()">Tap !!</button>
		      <p id="demo"></p>



          <h2>Sign In</h2>
          <p><a href="login.php" class="tbl-pink">Sign in</a></p>
          <p><a href="logout.php" class="tbl-pink">Log Out</a></p>
          
        </div>
      </section>
      <?php
					if(!empty($_SESSION['username'])){
				?>
				<div id="comment">
        <div class="container">
					<form method="post" action="komentar.php">
						<h3>Tulis Pesanan Anda/Write Your Order Here !</h3>
						<label>Nama/Name:</label><br>
						<input type="text" id="nama" name="nama" required maxlength="100" value="<?php echo $_SESSION['nama']; ?>"><br>
						<label>Email:</label><br>
            <input type="email" id="email" name="email" required value="<?php echo $_SESSION['email']; ?>"><br>
						<label>Pesanan/Order:</label><br>
						<textarea id="message" name="message" required></textarea>
						<input type="submit" value="send" id="send-comment" onclick="myFunc()">
					</form>
				</div>
      </div>
					<?php } ?>
				<hr>
			</section>
		</div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />    
<?php 
include("footer.php");
?>