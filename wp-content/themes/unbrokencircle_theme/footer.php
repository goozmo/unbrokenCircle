
		
		<?php global $redux_demo; ?>

		<!--gradient-->
		<?php if ($redux_demo['footer_gradient'] == 1) { ?> <div class="nicdark_space3 nicdark_bg_gradient"></div> <?php } ?>
		<!--footer-->
		<?php if ($redux_demo['footer_display'] == 1) { include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/babykids/include/footer/footer.php'; } ?>
		<!--copyright-->
		<?php if ($redux_demo['copyright_display'] == 1) { include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/babykids/include/footer/copyright.php'; } ?>

	</div>
	<!--end nicdark_site_fullwidth-->

</div>
<!--end nicdark_site-->

<!--start google analytics-->
<?php echo $redux_demo['general_js']; ?>
<!--end google analytics-->

<?php wp_footer(); ?>

<script type="text/javascript">
jQuery( document ).ready(function() {
// 	setTimeout(function(){ 
// 		bullets = document.getElementsByClassName("bullet thumb");
// 		bullets[0].setAttribute('style', 'background-image: url(/wp-content/uploads/2015/07/thurs.png); z-index:1000; position:relative;');
// 		bullets[1].setAttribute('style', 'background-image: url(/wp-content/uploads/2015/07/fri.png);   z-index:1000; position:relative;');
// 		bullets[2].setAttribute('style', 'background-image: url(/wp-content/uploads/2015/07/sat.png);   z-index:1000; position:relative;');
// 		bullets[3].setAttribute('style', 'background-image: url(/wp-content/uploads/2015/07/sun.png);   z-index:1000; position:relative;');
// 	}	 , 0);
	var site = document.getElementsByClassName("nicdark_site");
	if(site) {
	var offsetPx = window.innerHeight - site[0].offsetHeight;
		if(offsetPx > 0) { // footer is floating off bottom
			// Get the gradient above the footer
	 		var footer = document.getElementsByClassName("nicdark_bg_gradient");
	 		var lastItem = footer.length - 1; //change one base to zero base
	 		var styleString = 'margin-top:' + offsetPx + 'px;';
	 		// move footer to bottom
	 		footer[lastItem].setAttribute('style', styleString);
		}
	}
});
</script>

</body>  
</html>