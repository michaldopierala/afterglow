<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="gb18030">
  <meta name="description" content="Harem Pants"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/menu.css">
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  -->
  <link rel="shortcut icon" type="image/png" href="https://afterglowfashion.com/img/favicon.png"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bigelow+Rules&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&family=Permanent+Marker&family=Ubuntu&display=swap" rel="stylesheet">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWH90LT2VB">

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-SWH90LT2VB');
  </script>
</head>

<title> AFTERGLOW</title>

 <?php
 include 'urls.php';
 $connection = mysqli_connect($v['servername'],$v['username'],$v['password']);
 $db = mysqli_select_db($connection,$v['dbname']);
 ?>



<body>
<?php  include 'php_menu.php'; ?>

<!-- Cover Image -->

<div class="cover_image">
  <div class="cover_text"> step out your style
    <div class="cover_text_2"> New Harem Pants Collection</div>
  </div>
  <img src="<?php echo $v['cover_index'];?>" alt=""> 
</div>

<!-- Free shipping stripe -->

<div class="freeshipping_margin"></div>
<div class="container_D4">
  <div id="box_D4">
    <p>New Harem Pants Collection </p>
    <p>check out our bracelets</p>
    <p>New Harem Pants Collection</p>
  </div>
</div>


<!-- Harem Pants -->

<div class ="D13" >
  <div class="text0_D13"> Harem Pants </div>
  <div class="text1_D13"> check out new collection </div>

  <div id ="content_D13" >
    <!-- ##  1  ##  -->
    <div class="image_D13" > 
      <?php 
      //put product ID
      $id = 1;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>
      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D13"> 
        <?php echo $row['productname']; ?> 
        <?php if($row['quantity']<1){?><div class="out_st_d">SOLD OUT</div><?php } ?>
      </p>

      <p class="text3_D13">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr>
      </p>
    </div>

    <!-- ##  2  ##  -->
    <div class="image_D13" > 
      <?php 
      //put product ID
      $id = 3;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D13"> <?php echo $row['productname']; ?>
        <?php if($row['quantity']<1){?><div class="out_st_d">SOLD OUT</div><?php } ?>
      </p>
      <p class="text3_D13">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>

    <!-- ##  3  ##  -->
    <div class="image_D13" > 
      <?php 
      //put product ID
      $id = 5;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D13"> <?php echo $row['productname']; ?> 
        <?php if($row['quantity']<1){?><div class="out_st_d">SOLD OUT</div><?php } ?>
      </p>
      <p class="text3_D13">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>
  </div>
</div>



<!-- Bracelates -->

<div class ="D14" >
  <div class="text0_D14"> Bracelates </div>
  <div class="text1_D14"> New bracelets you absolutely need</div>

  <div id ="content_D14" >

    <!-- ##  1  ##  -->
    <div class="image_D14" > 
      <?php 
      //manualy select product ID
      $id = 6;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' /> 
      </a>
      <p class="text2_D14">
        <?php echo $row['productname']; ?> 
      </p>
      <?php if($row['quantity']<1){?><div class="out_st_b">SOLD OUT</div><?php } ?>
      <p class="text3_D14">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?>
        </nobr> 
      </p>
    </div>

    <!-- ##  2  ##  -->
    <div class="image_D14" > 
      <?php 
      //manualy select product ID
      $id = 7;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>'  /> 
      </a>
      <p class="text2_D14"> 
        <?php echo $row['productname']; ?> 
      </p>
      <?php if($row['quantity']<1){?><div class="out_st_b">SOLD OUT</div><?php } ?>
      <p class="text3_D14">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr>
      </p>
    </div>

    <!-- ##  3  ##  -->
    <div class="image_D14" > 
      <?php 
      //manualy select product ID
      $id = 8;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>'  /> 
      </a>
      <p class="text2_D14">
         <?php echo $row['productname']; ?>
      </p>
      <?php if($row['quantity']<1){?><div class="out_st_b">SOLD OUT</div><?php } ?>
      <p class="text3_D14">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>

    <!-- ##  4  ##  -->
    <div class="image_D14" > 
      <?php 
      //manualy select product ID
      $id = 9;
      // get images
      $image_1=$v['product_page']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' /> 
      </a>
      <p class="text2_D14"> 
        <?php echo $row['productname']; ?> 
      </p>
      <?php if($row['quantity']<1){?><div class="out_st_b">SOLD OUT</div><?php } ?>
      <p class="text3_D14">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>

  </div>
</div>



<!--    JEWELRY  -->

<div class ="D15" >
  <div class="text0_D15"> Jewelry </div>
  <div class="text1_D15"> Modne zestawy Twoich influencerów </div>

  <div id ="content_D15" >

    <!-- ##  id 10  ##  -->
    <div class="image_D15" > 
      <?php 
      //put product ID
      $id = 10;
      // get images
      $image_1=$v['product_page_jewelry']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page_jewelry']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page_jewelry'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D15">
         <?php echo $row['productname']; ?> 
      </p>
      <p class="text3_D15">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>

    <!-- ##  id 10  ##  -->
    <div class="image_D15" > 
      <?php 
      //put product ID
      $id = 10;
      // get images
      $image_1=$v['product_page_jewelry']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page_jewelry']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page_jewelry'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D15"> 
        <?php echo $row['productname']; ?> 
      </p>
      <p class="text3_D15">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr>
      </p>
    </div>

    <!-- ##  id 3  ##  -->
    <div class="image_D15" > 
      <?php 
      //put product ID
      $id = 15;
      // get images
      $image_1=$v['product_page_jewelry']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page_jewelry']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page_jewelry'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D15"> 
        <?php echo $row['productname']; ?> 
      </p>
      <p class="text3_D15">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr> 
      </p>
    </div>


    <!-- ##  id 10  ##  -->
    <div class="image_D15" > 
      <?php 
      //put product ID
      $id = 10;
      // get images
      $image_1=$v['product_page_jewelry']."$id"."/p1.4x5.jpg";
      $image_2=$v['product_page_jewelry']."$id"."/p2.4x5.jpg";
      //get product page
      $link = $v['product_page_jewelry'].$id;  
      $query = "SELECT * FROM mystock WHERE ID='$id'";
      $query_run = mysqli_query($connection,$query);
      $row = mysqli_fetch_array($query_run);
      ?>

      <a href="<?php echo $link; ?>" >
        <img src='<?php echo $image_1;?>' onmouseover="this.src='<?php echo $image_2;?>';" onmouseout="this.src='<?php echo $image_1;?>';" /> 
      </a>
      <p class="text2_D15">
         <?php echo $row['productname']; ?> 
      </p>
      <p class="text3_D15">
        <nobr><?php echo $_SESSION["customer"]["set_symbol"];?></nobr>
        <nobr style="margin-left:2px;"><?php echo round($row['price'] *$_SESSION["customer"]["set_conversion"]);?>&nbsp;&nbsp;<?php echo $_SESSION["customer"]["set_currency"];?></nobr>
      </p>
    </div>

  </div>
</div>



<!------- 
   FOOTER
-------->
</div>
<?php include 'php_subscribe.php';?>
<?php include 'php_footer.php';?>

</body>

</html>