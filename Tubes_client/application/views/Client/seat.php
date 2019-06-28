<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

   <!-- CSS -->
   <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-grid.min.css">
 
  
 




  

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/icon/apple-touch-icon-144x144.png">

 

</head>

  
  

  <!-- page title -->
  <section class="section section--first section--bg" data-bg="<?php echo base_url();?>assets/img/section/section.jpg">

            <!-- section title -->
            <h2 class="section__title">Pick a seat</h2>
            <!-- end section title -->
            <font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<form  method="post" action="pay">
  <?php
    echo "<font color='white'><center><h1>".$_POST["judul"]; 
    echo "</h1>";
    echo "<h2>".$_POST["jam"];
    echo "</h2>";
    echo "<h2>".$_POST["durasi"]." Minutes</h2></center></font>";
  ?>
  
  <input type="text" name="judul" hidden value="<?php echo $_POST['judul']; ?>">
  <input type="text" name="jam" hidden value="<?php echo $_POST['jam']; ?>">
  <input type="text" name="durasi" hidden value="<?php echo $_POST['durasi']; ?>">
  <input type="text" name="harga" hidden value="<?php echo $_POST['harga']; ?>">
  <center>
  <br>
  <h2><p style="border: 1px solid rgb(204, 204, 204); padding: 15px; display: block; width:300px; height:70px; background-color: white; text-align: center;">
SCREEN</p><br></h2>
  <?php 
    foreach ($seat as $key) {
    }
    for ($i=1; $i<=$key->seat; $i++) {
      if ($i<=5) {
        echo "<font color='white'><input type='radio' name='seat' value='$i'>
                $i";
      } 
    }echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp;</font>";
    foreach ($seat as $key) {
    }
    for ($i=6; $i<=$key->seat; $i++) {
      if ($i<=10) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
    }echo "<br>";

    foreach ($seat as $key) {
    }
    for ($i=11; $i<=$key->seat; $i++) {
      if ($i<=15) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
    }echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;";

    foreach ($seat as $key) {
    }
    for ($i=16; $i<=$key->seat; $i++) {
      if ($i<=20) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
    }echo "<br>";

    foreach ($seat as $key) {
    }
    for ($i=21; $i<=$key->seat; $i++) {
      if ($i<=25) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
    }echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;";

    foreach ($seat as $key) {
    }
    for ($i=26; $i<=$key->seat; $i++) {
      if ($i<=30) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 

    }echo "<br>";

     foreach ($seat as $key) {
    }
    for ($i=31; $i<=$key->seat; $i++) {
      if ($i<=35) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
      
    }echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;";

     foreach ($seat as $key) {
    }
    for ($i=36; $i<=$key->seat; $i++) {
      if ($i<=40) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
      
    }echo "<br>";



    foreach ($seat as $key) {
    }
    for ($i=41; $i<=$key->seat; $i++) {
      if ($i<=45) {
        echo "<input type='radio' name='seat' value='$i'>
                $i";
      } 
    }
  ?></center>
  <br><center><input type="submit" name="submit" value="Book"></center>
</form>

   
  <!-- end footer -->
 

  <!-- JS -->
  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mousewheel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mCustomScrollbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/wNumb.js"></script>
  <script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/plyr.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.morelines.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>