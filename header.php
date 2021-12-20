<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SELAMAT DATANG</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
    
  </head>
  <body>
  <nav>
      <div class="wrapper">
        <div class="logo"><a href="">Coffee Shop</a></div>
        <div class="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="kontak.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <?php
			session_start();
		?>
		<?php if(!empty($_SESSION['username'])){ ?>
			<div style="clear: both; text-align: right;margin-right: 20px;"><h3>Selamat Datang <span id="name"><?php echo $_SESSION['nama']; ?></span></h3></div>
			<?php } ?>
    
	
    
	  
    </div>
    
    
      
    </div>
  </body>
</html>
