<?php
	$img = $_GET['img'];
?>
	
	<span href="#" id="prev" onclick="prev(<?php echo $img; ?>);"></span>
	<span href="#" id="nxt" onclick="nxt(<?php echo $img; ?>);"></span>
	<div style='clear:both;'></div>
	<img class="img_slide" src="images/iitkgpmun12/<?php echo $img; ?>.jpg" width="auto" height="90%" align="middle" style="display:block;margin:auto;position:relative;top:-95%;"/>
	
	<!--<script type='text/javascript'>
	$("body").keydown(function(e) {
		if(e.keyCode == 37) { // left
			prev(<?php //echo $img; ?>);
		}
		else if(e.keyCode == 39) { // right
			nxt(<?php //echo $img; ?>);
		}
	});
	</script>
	-->