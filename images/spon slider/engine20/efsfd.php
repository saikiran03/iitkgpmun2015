
<div class="container">
  <div class="row" style="height:450px;">
	
    <div id="left-side" class="span3" >
      <ul class="side-list" >
          <li id="home"><a  href="<?php echo base_url(); ?>index.php/login/members_area/"><i class="icon-chevron-right"></i> Home <i class="icon-home"></i> </a></li>
          <li id="order"><a  href="#"><i class="icon-chevron-right"></i> Order <i class="icon-shopping-cart"></i></a></li>
          <li id="friends"><a  href="<?php echo base_url(); ?>index.php/login/members_area/friends"><i class="icon-chevron-right"></i> Friends <img src="<?php echo base_url()?>image/icons/glyphicons_043_group.png" width="20px;"></a></li>
          <li id="recommendations"><a  href="<?php echo base_url(); ?>index.php/login/members_area/recommendations"><i class="icon-chevron-right"></i> Recommendations <i class="icon-list-alt"></i></a></li>          
       </ul>
       
    </div>
<!-- This is for the middle area-->
<script>

window.onload = function(){
if(<?php echo $this->session->userdata('number_friends');?> > 33){
document.getElementById("scroller").style.overflowY = "scroll";
}
else{
document.getElementById("scroller").style.overflowY = "visible";
}

}

</script>
    <div class="span6" id="dunno" style="height:450px;border-left:1px solid #E5E5E5;border-right:1px solid #E5E5E5;">
        <div id="scroller" style="height:100%;">
          <div style="margin-left:10px;margin-right:10px;">
<!-- This is for the middle area-->





  </div></div>
<!-- This is for the middle area-->
    </div>
<!-- This is for the middle area-->
  <div id="right-side" class="span2" >
      <img src="<?php echo base_url(); ?>image/<?php echo $this->session->userdata('pic')?>" width="100px"class="img-polaroid"><br><br>
      
      
  </div>

   
</div>
</div>