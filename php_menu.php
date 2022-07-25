<?php
 session_start();
{?>





<?php
//       VARIABLES      // 
    include 'urls.php';
    $main_page = $v['main_url'];
    $logo = $v['logo'];
    $img_logo_D3 = $v['logo_name'];
    $logo_left_img = $v['logo_palm'];
    $shop_cart3_link = $v['shopping_cart_link'];
    $shopicon2_D3 = $v['shipping_icon1'];
    $shopicon3_D3 = $v['shipping_icon2'];
    $optionalcurrency = $v['optional_currency'];
    $shoppingcartlink = $v['cart_count'];


//    Save IP adress and currency       //  
// $_SERVER['REMOTE_ADDR'] - this is user IP

if(!isset($_SESSION["customer"]['ip']) ){
	
$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$_SERVER['REMOTE_ADDR']);

////////////// IP adress   ////////////////
$ip = $xml->geoplugin_request ;
//$ip = $ip['0'];
$ip_s = (string)$ip;

////////////// Country Name   ////////////////
$country = $xml->geoplugin_countryName ;
//$country = $country['0'];
$country_s = (string)$country;

////////////// Currency Code   ////////////////
$currency = $xml->geoplugin_currencyCode ;
//$currency = $currency['0'];
$currency_s = (string)$currency;

////////////// Currency Symbol   ////////////////
$symbol = $xml->geoplugin_currencySymbol_UTF8 ;
//$symbol = $symbol['0'];
$symbol_s = (string)$symbol;

////////////// Currency Ratio   ////////////////
$conversion = $xml->geoplugin_currencyConverter ;
//$conversion= $conversion['0'];
$conversion_s = (string)$conversion;

$_SESSION["customer"] = array('ip'=>$ip_s,'country'=>$country_s, 'currency'=>$currency_s, 'symbol'=>$symbol_s, 'conversion'=>$conversion_s, 'set_currency'=>$currency_s,'set_symbol'=>$symbol_s, 'set_conversion'=>$conversion_s, 'set_country'=>$country_s);

// In caess there is no API connection or other error use defoult values for $_SESSION["customer"]; 
if ($_SESSION["customer"]["conversion"]==0 or $_SESSION["customer"]["conversion"]==null ) {
$_SESSION["customer"] = array('ip'=>'xxxx','country'=>'New Zealand', 'currency'=>'USD', 'symbol'=>'&#36;', 'conversion'=>'1', 'set_currency'=>'USD','set_symbol'=>'&#36;', 'set_conversion'=>'1', 'set_country'=>'New Zealand');
}


///   CURRENCY SELECTION ORDER
//  DESCRIPTION: At first place in SESSION[order] we always put set_currency, at second place we put currency from SESSION[customer] but if its is repeted it needs to replaced with spare element (TOP from $symbol).   
$symbol = array  (
  array("USD","&#36"),
  array("EUR","&#128"),
  array("AUD","&#36"),
  array("CAD","&#36"),
  array("GBP","&#163"),
  array("NZD","&#36"),
  array("PLN","&#122;&#322;"),
  );

unset($_SESSION["ordering"]);

 $_SESSION["ordering"][0][0]= $_SESSION["customer"]['set_currency'];
 $_SESSION["ordering"][0][1]= $_SESSION["customer"]['set_symbol'];
// we asseme that set_curriences and curiences will always be the same so there is no need to set  $_SESSION["ordering"][1][0] and  $_SESSION["ordering"][1][1]


// Loop for creating order of currencies in $_SESSION[ordering] - Create session ordering by scanning through $symbol array. 
// If currency already exist in $symbol array than save $mark=1; and than removed it from array.
$i=2;  // index for $_SESSION["ordering"] in the loop we create ordering. First two elemnets already added. 
$k=0;  // index from $symbol array 
for ($i; $i<8; ++$i) {
$mark=0;
foreach($_SESSION["ordering"] as $value){
    if(in_array($symbol[$k][0], $value, true)){
        $mark=1;
    }
}

      $_SESSION["ordering"][$i][0]= $symbol[$k][0]; 
  	  $_SESSION["ordering"][$i][1]= $symbol[$k][1];
  	  
if ($mark == 1) {
	unset( $_SESSION["ordering"][$i]);
}
$k=$k+1;
}
$_SESSION["ordering"] = array_values($_SESSION["ordering"]);
}
?>



<div class="menu_container">

    <header id="main-header">
        <a href="<?php echo $main_page;?>" title="AFTERGLOW" rel="home">
            <img class="logo" src="<?php echo $logo;?>">
        </a>
    </header>

    <div class="menu_D3" id="navbar_D3">

    <a class="logo_D3" id="logback_D3" href="<?php echo $main_page;?>">
        <img class="img-logo_D3" src="<?php echo $img_logo_D3;?>">
    </a>
    <a href="<?php echo $v['menu_link1']; ?>">HOME</a>
    <a href="<?php echo $v['menu_link4']; ?>">pants</a>
    <a href="<?php echo $v['menu_link2']; ?>">bracelets</a>

    <a href="<?php echo $v['menu_link5']; ?>">CONTACT US</a>

<!-- LOGO ON THE LEFT SIDE  -->
    <div class="logo_left" >
        <img class="logo_left_img" src="<?php echo $logo_left_img;?>">
    </div>

<!-- MENU ICON FOR MOBILE PHONES -->
    <a class="icon_D3" href="javascript:void(0);"  onclick="myFunction()">
        <div id="bar1_D3" class="element_D3" ></div> 
        <div id="bar2_D3" style="color:white; font-size:27px; display:none;">&#10005;</div>
    </a>


<!-- OPTIONAL CURRENCY -->

    <div class="currency">
        <select onChange="jsFunction()" id="selectOpt">
            <option value="<?php echo $_SESSION["ordering"][0][0]; ?>"> <?php echo $_SESSION["ordering"][0][0]; ?></option>  
            <option value="<?php echo $_SESSION["ordering"][1][0]; ?>"> <?php echo $_SESSION["ordering"][1][0]; ?></option>
            <option value="<?php echo $_SESSION["ordering"][2][0]; ?>"> <?php echo $_SESSION["ordering"][2][0]; ?></option>
            <option value="<?php echo $_SESSION["ordering"][3][0]; ?>"> <?php echo $_SESSION["ordering"][3][0]; ?></option>
            <option value="<?php echo $_SESSION["ordering"][4][0]; ?>"> <?php echo $_SESSION["ordering"][4][0]; ?></option>	
            <option value="<?php echo $_SESSION["ordering"][5][0]; ?>"> <?php echo $_SESSION["ordering"][5][0]; ?></option>	
        </select>

        <script>
            // OPTIONAL CURRENCY 
        function jsFunction(){
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



<!-- SHOPPING CART ICON -->			
    <div class="shop_cart3_D3" >
        <a class="shop_cart3_relative" href="<?php echo $shop_cart3_link;?>" target="_self">
        <img id="shopicon2_D3"  src="<?php echo $shopicon2_D3; ?>">
        <img id="shopicon3_D3"  src="<?php echo $shopicon3_D3;?>">
        <div class="shop_cart_count" id="cart_count"  >
            <?php
                if(isset($_SESSION["cart"])){	 
                    $item_array_id = array_column(($_SESSION["cart"]), 'product_id');
                    $count = count ($item_array_id); 
                    echo $count; 
                } 
                else
                {
                echo 0;  
                }
            ?>
        </div>
        </a>	
    </div>

</div>








<script type="text/javascript">

    /* Update quantity in shopping cart icon from menu (every 2 second) */   
    setInterval(function loadDoc() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cart_count").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "<?php echo "$shoppingcartlink"; ?>" , true);  
        xmlhttp.send();
    }, 2000)    /*  2 seconds  */  


    /*  Mobile menu - Expand and collapse content   */
    function myFunction() {
        var x = document.getElementById("navbar_D3");
        if (x.className === "menu_D3") {
            x.className += " xxx";
            document.getElementById("bar1_D3").style.display = "none"; 		
            document.getElementById("bar2_D3").style.display = "";
            document.getElementById("logback_D3").style.background= "black"; 
        } else {
            x.className = "menu_D3";
            document.getElementById("bar1_D3").style.display = "";
            document.getElementById("bar2_D3").style.display = "none";
        }
    }
</script>
</div>
<?php } ?>