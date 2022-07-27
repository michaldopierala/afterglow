<?php  { 

//  save subscription email in data base 
if(isset($_POST['subscribe'])){
  $email = $_POST["mail"];
  $query_customer = "INSERT INTO subscribe(email) VALUES('$email')";
  $query_run = mysqli_query($connection,$query_customer);
}

?>



<!--    SUBSCRIBE  --> 

<div class="subscribe_D52">
	<div class="text1_D52">Sign up and save </div>
	<div class="text2_D52">Subscribe to get special offers and free giveaways. </div>
	<!-- input field for email  -->
	<form action="" method="POST">
		<input  type="text" placeholder="Enter your email" name="mail">   
		<input  id="button_D52" name="subscribe" type="submit" value="SUBSCRIBE">
	</form>

</div>

<?php } ?>
