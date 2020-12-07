<!--footer-->
<footer>
	<section class="d-md-flex justify-content-between align-items-center">
		<div class="copyright">
			Copyright &copy; <?php echo date("Y"); ?> 株式会社ミクニ
		</div>
		<div class="flogo">
			<img src="images/layout/logo-footer.svg">
		</div>
		<dl class="fnav">
			<dd><a class="scroll" href="#about">about</a></dd>
			<dd><a class="scroll" href="#products">products</a></dd>
			<dd><a class="scroll" href="#clear-mild">clear and mild flavors</a></dd>
			<dd><a class="scroll" href="#environment">environment</a></dd>
			<dd><a class="scroll" href="#how-to-drink">how to drink</a></dd>
			<dd><a class="scroll" href="#our-craft">our craft - blending</a></dd>
			<dd><a class="scroll" href="#contact">contact</a></dd>
		</dl>
	</section>
</footer>
</article>
<!--goTOP-->
<a href="#0" class="cd-top js-cd-top"><img src="images/layout/cd-top-arrow.svg"></a>

<!--bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- dropdown -->
<script type="text/javascript" src="js/bootstrap-4-hover-navbar.js"></script>
<!--slidebars-->
<script type="text/javascript" src="js/slidebars/slidebars.js"></script>
<script type="text/javascript" src="js/slidebars/scripts.js"></script>
<!-- svg color -->
<script type="text/javascript" src="js/svg-ove-color.js"></script>
<!--goTop-->
<script type="text/javascript" src="js/backtop.js"></script>
<!-- slide -->
<script type="text/javascript" src="js/jssor/js/jssor.slider-27.5.0.min.js"></script>
<script type="text/javascript" src="js/jssor/jssor.js"></script>
<!-- light box -->
<script type="text/javascript" src="js/lity/lity.js"></script>
<!-- owl carousel -->
<script type="text/javascript" src="js/OwlCarousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/OwlCarousel/owlcarousel.js"></script>
<!-- page smooth scrolling -->
<script type="text/javascript">
	$(document).ready(function(){
	 let scroll_link = $('.scroll');
		//smooth scrolling -----------------------
		scroll_link.click(function(e){
			e.preventDefault();
			let url = $('body').find($(this).attr('href')).offset().top;
			$('html, body').animate({
				scrollTop : url
			},700);
			$(this).parent().addClass('active');
			$(this).parent().siblings().removeClass('active');
			return false;
	   });
	});
</script>
<?php include("footerjs.php") ?>