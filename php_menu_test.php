<?php
 session_start();
{?>

 <!-- INTEGRATIONS VARIABLE - UPDATE THIS WHEN CHANGING WEBSITE ADRESS  -->
<?php
include 'urls.php';
$optionalcurrency = $v['optional_currency'];
?>




<!---  --------------------------------------------------------------- -->
<!---  --------------------------------------------------------------- -->
<!---  --------------------------------------------------------------- -->
<!---  --------------------------------------------------------------- -->
<!--------------------------------------------------------------
      LOGO + MENU              --   --  LOGO + MENU     
----------------------------------------------------------------------> 
<style>

.menu_container{
position: fixed;
top: 0;
width:100%;
margin:50px;
}


#selectOpt{
	background-color: rgb(240,240,240);
	padding:4px;
    border:red solid 1px;
    height:50px;
}


</style>

<div class="menu_container">



<div class="menu_D3" id="navbar_D3">
		






<!---  --------------------------------------------------------------- -->
<!---  -------------------OPTIONAL CURRENCY --------------------------- -->
<!---  --------------------------------------------------------------- -->
<div class="currency">
<select onChange="jsFunction()" id="selectOpt">
    <option value="x"> x</option>  
    <option value="x"> x</option>  
</select>

<script>
function jsFunction(){
    document.getElementById("demo").innerHTML = 5 + 6;
  var myselect = document.getElementById("selectOpt");
  var num = myselect.options[myselect.selectedIndex].value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
		    location.reload();    
        };
    };
    xmlhttp.open("GET", "<?php echo $optionalcurrency; ?>" + num, true);
    xmlhttp.send();
}
</script>
</div>
<!---  --------------------------------------------------------------- -->
<!---  --------------------------------------------------------------- -->

	


</div>


</div>
<?php } ?>