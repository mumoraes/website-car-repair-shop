<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Car Repair Shop</title>
      <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link rel="icon" href="img/logo.gif">
    </head>
    <body id="home">
      <header>
        <nav>
          <ul>
            <li><a href="index.html" title="home" class="active">Home</a></li>
  				  <li><a href="about-us.html" title="about us">About Us</a></li>
  				  <li><a href="services.html" title="services">Services</a></li>
  				  <li><a href="maintenance.html" title="maintenance">Maintenance</a></li>
            <li><a href="contact.html" title="contact">Contact</a></li>
    			</ul>
        </nav>
         <div id="divHeader"> 
         <a href="index.html " title="Home"><img width="280" alt="logo" src="img/logo.gif"></a> 
        </div>
      </header>
      <main id="content">
        <br>
        <br>
        <?php
          $fname = $_GET['fname'];
          $lname = $_GET['lname'];
          echo('<p>Thank You, '.$fname.'&nbsp;'.$lname.', your message has been sent successfully.');
        ?>
      <br>
      <p>We will contact you soon!</p>
      </main>
      <footer>
        <p><small>&copy; All Rigths Reserved. Developed by Murilo Moraes</small></p>
      </footer>
    </body>
  </html>
