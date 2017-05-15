<?php get_header(); ?>
			<div class="" id="banner">
				<ul class="slider">
					<li>
						<a href="http://vapehouse.ru/catalog/devaysy/dripki/apocalypse-gen-2-rda-by-armageddon-mfg.html" title="Apocalypse"><img alt="Apocalypse" class="lazyOwl" data-src="http://vapehouse.ru/upload/iblock/6b5/6b53a37424399ae4405670c0fd165f69.jpg"></a>
					</li>
					<li>
						<a href="http://vapehouse.ru/catalog/devaysy/mekhmody/raven-mod-by-vapor-bagarre.html" title="raven"><img alt="raven" class="lazyOwl" data-src="http://vapehouse.ru/upload/iblock/b84/b844e68ad1a607621372631efbc3480a.jpg"></a>
					</li>
					<li>
						<a href="http://vapehouse.ru/catalog/brendy/just-jam-eliquid" title="Jam"><img alt="Jam" class="lazyOwl" data-src="http://vapehouse.ru/upload/iblock/0d3/0d3bc0ab39b6de1ce724c5fb40554ce2.jpg"></a>
					</li>
					<li>
						<a href="http://vapehouse.ru/catalog/devaysy/topkepy/24mm-conversion-cap-by-dotmod.html" title="Dotmod Conversion Cap"><img alt="Dotmod Conversion Cap" class="lazyOwl" data-src="http://vapehouse.ru/upload/iblock/cb9/cb9a8d06acf79b06dac4fbdcc03771c9.jpg"></a>
					</li>
				</ul><!--Slider end-->
			</div>

			<div class="container" id="content_index">
				&nbsp;

			<?php if(have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<div class="name"><?php the_title(); ?></div>
				<?php the_content(); ?>
			<?php endwhile; ?>
			<?php endif; ?>	
<!--
				<div class="item" title="DripTip 810 by Custom Vape Parts (высокие)">
					<div class="img">
						<a href="/catalog/devaysy/driptipy/driptip-810-by-custom-vape-parts-vysokie.html" title="DripTip 810 by Custom Vape Parts (высокие)"><img alt="" border="0" class="parent" height="212" src=".//wp-content/themes/kultpara/images/790b354e290355296353b4ea33fc0058.jpg" width="230"><img alt="" border="0" class="dop" height="212" src=".//wp-content/themes/kultpara/images/fdebfd886ba39e9426153de19054efce.jpg" width="230"></a>
					</div>
					<div class="name">
						<a href="/catalog/devaysy/driptipy/driptip-810-by-custom-vape-parts-vysokie.html" title="DripTip 810 by Custom Vape Parts (высокие)">DripTip 810 by Custom Vape Parts (высокие)</a>
					</div>
					<div class="price">
						<span class="catalog-price">990 руб.</span>
					</div>
				</div>
-->

			<div class="clr"></div>


&nbsp;
			</div>
		</div>

		 <?php get_footer(); ?>
		
