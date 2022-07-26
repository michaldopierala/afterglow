<?php  { ?>

<!--   FOOTER   -->


<div class="footer_D16">
  
  <!-- Icons for social media  -->
  <div class="one_D16">
    <img class="one1_D16" src="<?php echo $v['foo_join'] ?>">
    <div class="one2_D16">

      <div class="one2a_D16" >
        <a href="<?php echo $v['foo_fac_link'] ?>" target="_blank"> <img class="fb" src="<?php echo $v['foo_facebook'] ?>"></a>
      </div>

      <div class="one2a_D16" >
        <a href="<?php echo $v['foo_ins_link'] ?>" target="_blank"> <img class="instagram" src="<?php echo $v['foo_instagarm'] ?>"></a>
      </div>

      <div class="one2a_D16" >  
        <a href="<?php echo $v['foo_pin_link'] ?>" target="_blank"> <img class="pinterest" src="<?php echo $v['foo_pinterest'] ?>"></a>
      </div>
    </div>
  </div>

  <!-- Hyperlink for terms and cnditions  -->
  <div class="two_D16">
    <div class="two1_D16">
      <div class="two1a_D16"><a href="<?php echo $v['foo_pri'] ?>">Privacy</a></div>
      <div class="two1a_D16"><a href="<?php echo $v['foo_ter'] ?>">Terms of use</a></div>
      <div class="two1a_D16"><a href="<?php echo $v['foo_ret'] ?>">Returns</a></div>
      <div class="two1a_D16"><a href="<?php echo $v['foo_shi'] ?>">Shipping</a></div>
    </div>
    <br>
    <!-- Logos  -->
    <div class="two2_D16">
      <img class="three-logo1_D16" src="<?php echo $v['foo_log'] ?>"><br>
      <img class="three-logo2_D16" src="<?php echo $v['foo_fredom'] ?>"><br>
    </div>
  </div>

  <!-- Icon of palm  -->
  <div class="three_D16">
    <img class="three-logo3_D16" src="<?php echo $v['foo_palm'] ?>"><br>
  </div>

</div>


<!--  prevents resubmition of form data when refreshing page  -->
<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>

<?php } ?>

