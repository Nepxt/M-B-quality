<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-0">
				<div class="copyright-content wow zoomIn">
					<p>Copyright ©
						<?php echo date('Y'); ?> - M&B Quality Drywall & Painting. All Rights Reserved.
						<span>Designed
							By: <a href="#" target="_blank" title="Nepxt"> Nepxt</a></span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.8/iconify-icon.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
	$(document).ready(function () {
		$(".fancybox").fancybox();
	});
</script>
<script>
	jQuery(document).ready(function ($) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
		$('.counter').addClass('animated fadeInDownBig');
		$('h6').addClass('animated fadeIn');
	});
</script>

<?php if ($page == 'portfolio') { ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/js/unitegallery.min.js" integrity="sha512-q0Tx9njjBh0TfH3nPC2HfQbLXRyq27yx22U9zdj7nwH97SfIbnvAwTqpjwowq2dDZBe2k84sx/GdEZwzHsDqUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/unitegallery/1.7.40/themes/tilesgrid/ug-theme-tilesgrid.min.js" integrity="sha512-HAmxO/39w/Gnnd5cv/k2Uc2NVpD3M5u4J2n8J9MuofRHGz4izA34nopu4Uut6SsG06mMlcJswFXVQfhoTvXvmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		jQuery(document).ready(function () {
			jQuery("#gallery").unitegallery({
				grid_space_between_cols: 5,
				grid_space_between_rows: 5,
				tile_enable_border: false,
				tile_enable_shadow: false,
				grid_padding: 0,
				tile_width: 250,
				tile_height: 200,
				grid_num_rows: 20,
			});
		});
	</script>
<?php } ?>

</body>

</html>