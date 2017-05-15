<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

	<body>
		<div id="panel"></div>
		<div id="wrapper">
			<div class="visible-md visible-lg" id="header">
				<div class="left_block">
					<a class="address" data-target="#address" data-toggle="modal" style="margin-bottom: 100px;width: 220px;height: 0px;">
					<div class="address_block hover-shadow hover_tooltip" data-title="VapeHouse МАРОСЕЙКА" style="">
						<div class="title">
							VapeHouse МАРОСЕЙКА
						</div><!--<div class="text">ул.Александра Солженицына д.22/2</div>-->
					</div></a> <a class="card hover-shadow hover_tooltip" data-target="#sale_system" data-title="Скидочная система" data-toggle="modal"></a>
					<div id="separator"></div><a class="car hover-shadow hover_tooltip" data-target="#delivery" data-title="Служба доставки" data-toggle="modal"></a> <a href="/catalog/avid-lyfe-comp-lyfe" title="AVID LYFE/COMP LYFE">
					<div id="avid"></div></a>
				</div><a href="/" title="VapeHouse">
				<div class="middle_block"></div></a>
				<div class="right_block">
					<div class="title_phone">
						ИНТЕРНЕТ-МАГАЗИН
					</div>
					<div class="phone hover-shadow">
						<span></span><a href="callto:+79263084000">+7(926)308-4000</a>
					</div>
					<div class="title_phone">
						МАРОСЕЙКА
					</div>
					<div class="phone hover-shadow">
						<span></span><a href="callto:+79263084994">+7(926)308-4994</a>
					</div>
					<div class="bot">
						<div class="enter" data-target="#enter_form" data-toggle="modal" title="Войти"></div>
						<div id="separator"></div>
						<div class="ajax_basket">
							<script>
							var bx_basket1 = new BitrixSmallCart;
							</script>

							<div class="bx-basket bx-opener" id="bx_basket1">
								<!--'start_frame_cache_bx_cart_block'-->

								<div class="basket"><!-- cart -->
										<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Корзина')) : ?>
											<a class="order_link" href="http://localhost/vape/wp/?wpshopcarts=vizit" title="Оформить заказ">
												<span>0</span>
											</a>
												<!-- <img src="<?php bloginfo('template_url'); ?>/images/basket-butt.png" /> -->
											
										<?php endif; ?>	
									<!-- <a class="order_link" href="/personal/order/make/" title="Оформить заказ">
											<span>0</span>0 р.
										</a> -->
								</div><!--'end_frame_cache_bx_cart_block'-->

							</div>

							<!-- <script>
							bx_basket1.siteId       = 's1';
							bx_basket1.cartId       = 'bx_basket1';
							bx_basket1.ajaxPath     = 'http://vapehouse.ru/bitrix/componentshttp://vapehouse.ru/bitrix/sale.basket.basket.line/ajax.php';
							bx_basket1.templateName = 'basket';
							bx_basket1.arParams     =  {'COMPONENT_TEMPLATE':'basket','PATH_TO_BASKET':'/personal/cart/','SHOW_NUM_PRODUCTS':'Y','SHOW_TOTAL_PRICE':'Y','SHOW_EMPTY_VALUES':'Y','SHOW_PERSONAL_LINK':'N','PATH_TO_PERSONAL':'/personal/','SHOW_AUTHOR':'N','PATH_TO_REGISTER':'/login/','PATH_TO_PROFILE':'/personal/','SHOW_PRODUCTS':'Y','POSITION_FIXED':'N','SHOW_DELAY':'N','SHOW_NOTAVAIL':'N','SHOW_SUBSCRIBE':'N','SHOW_IMAGE':'Y','SHOW_PRICE':'Y','SHOW_SUMMARY':'Y','PATH_TO_ORDER':'/personal/order/make/','POSITION_HORIZONTAL':'right','POSITION_VERTICAL':'top','HIDE_ON_BASKET_PAGES':'N','CACHE_TYPE':'A','AJAX':'N','~COMPONENT_TEMPLATE':'basket','~PATH_TO_BASKET':'/personal/cart/','~SHOW_NUM_PRODUCTS':'Y','~SHOW_TOTAL_PRICE':'Y','~SHOW_EMPTY_VALUES':'Y','~SHOW_PERSONAL_LINK':'N','~PATH_TO_PERSONAL':'/personal/','~SHOW_AUTHOR':'N','~PATH_TO_REGISTER':'/login/','~PATH_TO_PROFILE':'/personal/','~SHOW_PRODUCTS':'Y','~POSITION_FIXED':'N','~SHOW_DELAY':'N','~SHOW_NOTAVAIL':'N','~SHOW_SUBSCRIBE':'N','~SHOW_IMAGE':'Y','~SHOW_PRICE':'Y','~SHOW_SUMMARY':'Y','~PATH_TO_ORDER':'/personal/order/make/','~POSITION_HORIZONTAL':'right','~POSITION_VERTICAL':'top','~HIDE_ON_BASKET_PAGES':'N','~CACHE_TYPE':'A','~AJAX':'N','cartId':'bx_basket1'};
							bx_basket1.closeMessage = 'Скрыть';
							bx_basket1.openMessage  = 'Раскрыть';
							bx_basket1.activate();
							</script> -->
						</div>
					</div>
				</div>
			</div>

			<!--menu-->
			<div class="default navmenu navmenu-default navmenu-fixed-left offcanvas-sm" id="nav_block">
				<div class="navmenu-brand search hidden-md hidden-lg">
					<form action="/search/" method="get">
						<input name="s" title="Поиск" type="submit" value="">
						<input autocomplete="off" name="q" placeholder="Поиск" type="text" value="">
					</form>
				</div>

				<ul class="menu nav navmenu-nav">
					<div id="additionalmenu">
					    <?php wp_nav_menu( array( 'theme_location' => 'additionalmenu' ) ); ?>
					</div>
					<?php #wp_nav_menu();
					#wp_list_pages('title_li=');?>
					<!--<li id="item_0">
						<a href="/catalog/brendy" title="Бренды">Бренды</a>
						<ul>
							<li>
								<a href="/catalog/brendy/anarchist-juice" title="Anarchist Juice">Anarchist Juice</a>
							</li>
							<li>
								<a href="/catalog/brendy/anml" title="Anml">Anml</a>
							</li>
							<li>
								<a href="/catalog/brendy/anml-unleashed" title="ANML Unleashed">ANML Unleashed</a>
							</li>
							<li>
								<a href="/catalog/brendy/apollo" title="APOLLO">APOLLO</a>
							</li>
							<li>
								<a href="/catalog/brendy/apple-caramel-drop" title="Apple Caramel Drop">Apple Caramel Drop</a>
							</li>
							<li>
								<a href="/catalog/brendy/av-liquid-lyfe" title="AV LIQUID LYFE">AV LIQUID LYFE</a>
							</li>
							<li>
								<a href="/catalog/brendy/bad-drip" title="BAD DRIP">BAD DRIP</a>
							</li>
							<li>
								<a href="/catalog/brendy/bad-joos" title="Bad Joos">Bad Joos</a>
							</li>
							<li>
								<a href="/catalog/brendy/bake-it-vapor" title="Bake It Vapor">Bake It Vapor</a>
							</li>
							<li>
								<a href="/catalog/brendy/banana-butt" title="BANANA BUTT">BANANA BUTT</a>
							</li>
							<li>
								<a href="/catalog/brendy/bazooka-sour-straws" title="Bazooka Sour Straws">Bazooka Sour Straws</a>
							</li>
							<li>
								<a href="/catalog/brendy/big-bottle-co" title="BIG BOTTLE CO.">BIG BOTTLE CO.</a>
							</li>
							<li>
								<a href="/catalog/brendy/big-league-clouds" title="BIG LEAGUE CLOUDS">BIG LEAGUE CLOUDS</a>
							</li>
							<li>
								<a href="/catalog/brendy/bigfindeal" title="BIGFinDEAL">BIGFinDEAL</a>
							</li>
							<li>
								<a href="/catalog/brendy/black-note" title="Black Note">Black Note</a>
							</li>
							<li>
								<a href="/catalog/brendy/bmi" title="BMI">BMI</a>
							</li>
							<li>
								<a href="/catalog/brendy/candy-king" title="CANDY KING">CANDY KING</a>
							</li>
							<li>
								<a href="/catalog/brendy/candy-land" title="CANDY LAND">CANDY LAND</a>
							</li>
							<li>
								<a href="/catalog/brendy/choco-cow" title="Choco Cow">Choco Cow</a>
							</li>
							<li>
								<a href="/catalog/brendy/choo-choo-liquid" title="Choo Choo Liquid">Choo Choo Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/circus-cookies-eliquid" title="Circus Cookies Eliquid">Circus Cookies Eliquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/coup-de-grace-e-liquid" title="COUP DE GRACE E-LIQUID">COUP DE GRACE E-LIQUID</a>
							</li>
							<li>
								<a href="/catalog/brendy/craze-liquid" title="Craze Liquid">Craze Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/cuttwood" title="Cuttwood">Cuttwood</a>
							</li>
							<li>
								<a href="/catalog/brendy/dairy-dreams" title="Dairy Dreams">Dairy Dreams</a>
							</li>
							<li>
								<a href="/catalog/brendy/dotmod" title="DOTMOD">DOTMOD</a>
							</li>
							<li>
								<a href="/catalog/brendy/doughman-e-liquid" title="DOUGHMAN E-Liquid">DOUGHMAN E-Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/dripnation" title="Dripnation">Dripnation</a>
							</li>
							<li>
								<a href="/catalog/brendy/dynamite-juice" title="Dynamite juice">Dynamite juice</a>
							</li>
							<li>
								<a href="/catalog/brendy/entourage-vapor" title="Entourage Vapor">Entourage Vapor</a>
							</li>
							<li>
								<a href="/catalog/brendy/ethos" title="Ethos">Ethos</a>
							</li>
							<li>
								<a href="/catalog/brendy/faq-vapes" title="FAQ Vapes">FAQ Vapes</a>
							</li>
							<li>
								<a href="/catalog/brendy/flawless-juice" title="Flawless juice">Flawless juice</a>
							</li>
							<li>
								<a href="/catalog/brendy/flo-vapor" title="FLO VAPOR">FLO VAPOR</a>
							</li>
							<li>
								<a href="/catalog/brendy/foodfighter-juice" title="FoodFighter Juice">FoodFighter Juice</a>
							</li>
							<li>
								<a href="/catalog/brendy/fresh-juice-co" title="FRESH JUICE CO.">FRESH JUICE CO.</a>
							</li>
							<li>
								<a href="/catalog/brendy/fresh-vapor-liquid" title="FRESH Vapor Liquid">FRESH Vapor Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/fryd-eliquids" title="FRYD Eliquids">FRYD Eliquids</a>
							</li>
							<li>
								<a href="/catalog/brendy/grannys-pie-vape-co" title="Grannys Pie Vape Co">Grannys Pie Vape Co</a>
							</li>
							<li>
								<a href="/catalog/brendy/high-roller-sweets" title="High Roller Sweets">High Roller Sweets</a>
							</li>
							<li>
								<a href="/catalog/brendy/holy-cannoli" title="Holy Cannoli">Holy Cannoli</a>
							</li>
							<li>
								<a href="/catalog/brendy/hotcakes" title="HOTCAKES">HOTCAKES</a>
							</li>
							<li>
								<a href="/catalog/brendy/juice-roll-upz" title="Juice Roll Upz">Juice Roll Upz</a>
							</li>
							<li>
								<a href="/catalog/brendy/just-jam-eliquid" title="Just Jam Eliquid">Just Jam Eliquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/liquid-efx" title="Liquid EFX">Liquid EFX</a>
							</li>
							<li>
								<a href="/catalog/brendy/lmc" title="LMC">LMC</a>
							</li>
							<li>
								<a href="/catalog/brendy/loaded-e-liquid" title="Loaded E-Liquid">Loaded E-Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/mad-hatter" title="Mad Hatter">Mad Hatter</a>
							</li>
							<li>
								<a href="/catalog/brendy/magic-acid-ride" title="Magic Acid Ride">Magic Acid Ride</a>
							</li>
							<li>
								<a href="/catalog/brendy/mike-rick-s-lemonade-drips" title="Mike &amp; Rick's Lemonade Drips">Mike &amp; Rick's Lemonade Drips</a>
							</li>
							<li>
								<a href="/catalog/brendy/mod-milk" title="Mod Milk">Mod Milk</a>
							</li>
							<li>
								<a href="/catalog/brendy/modus-eliquid" title="Modus Eliquid">Modus Eliquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/moku" title="MOKU">MOKU</a>
							</li>
							<li>
								<a href="/catalog/brendy/mr-meringue-e-liquid" title="Mr. Meringue E-Liquid">Mr. Meringue E-Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/muther-fluffer" title="Muther Fluffer">Muther Fluffer</a>
							</li>
							<li>
								<a href="/catalog/brendy/naked-100" title="Naked 100">Naked 100</a>
							</li>
							<li>
								<a href="/catalog/brendy/one-hit-wonder" title="ONE HIT WONDER">ONE HIT WONDER</a>
							</li>
							<li>
								<a href="/catalog/brendy/pacha-mama" title="PACHA MAMA">PACHA MAMA</a>
							</li>
							<li>
								<a href="/catalog/brendy/reup-liquid" title="REUP Liquid">REUP Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/rig-reserve" title="RIG RESERVE">RIG RESERVE</a>
							</li>
							<li>
								<a href="/catalog/brendy/ronin" title="RONIN">RONIN</a>
							</li>
							<li>
								<a href="/catalog/brendy/ruthless" title="Ruthless">Ruthless</a>
							</li>
							<li>
								<a href="/catalog/brendy/sour-dream" title="Sour Dream">Sour Dream</a>
							</li>
							<li>
								<a href="/catalog/brendy/sugar-eliquid" title="SUGAR ELIQUID">SUGAR ELIQUID</a>
							</li>
							<li>
								<a href="/catalog/brendy/teleos" title="Teleos">Teleos</a>
							</li>
							<li>
								<a href="/catalog/brendy/the-drip-co" title="The Drip Co">The Drip Co</a>
							</li>
							<li>
								<a href="/catalog/brendy/the-merge" title="The Merge">The Merge</a>
							</li>
							<li>
								<a href="/catalog/brendy/the-milkman" title="The Milkman">The Milkman</a>
							</li>
							<li>
								<a href="/catalog/brendy/the-simple-vapor-co" title="The Simple Vapor Co.">The Simple Vapor Co.</a>
							</li>
							<li>
								<a href="/catalog/brendy/tinted-brew-liquid" title="Tinted Brew Liquid">Tinted Brew Liquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/tricker-treatz" title="Tricker Treatz">Tricker Treatz</a>
							</li>
							<li>
								<a href="/catalog/brendy/twelve-monkeys" title="Twelve Monkeys">Twelve Monkeys</a>
							</li>
							<li>
								<a href="/catalog/brendy/vape-breakfast-classics" title="Vape Breakfast Classics">Vape Breakfast Classics</a>
							</li>
							<li>
								<a href="/catalog/brendy/vape-snackes" title="Vape Snackes">Vape Snackes</a>
							</li>
							<li>
								<a href="/catalog/brendy/vape-style" title="VAPE STYLE">VAPE STYLE</a>
							</li>
							<li>
								<a href="/catalog/brendy/vape-xl" title="VAPE XL">VAPE XL</a>
							</li>
							<li>
								<a href="/catalog/brendy/vaper-treats" title="Vaper Treats">Vaper Treats</a>
							</li>
							<li>
								<a href="/catalog/brendy/vapergate" title="VAPERGATE">VAPERGATE</a>
							</li>
							<li>
								<a href="/catalog/brendy/vapesauz" title="Vapesauz">Vapesauz</a>
							</li>
							<li>
								<a href="/catalog/brendy/vtmn" title="VTMN">VTMN</a>
							</li>
							<li>
								<a href="/catalog/brendy/waffle-man" title="Waffle Man">Waffle Man</a>
							</li>
							<li>
								<a href="/catalog/brendy/yogi-eliquid" title="YOGI Eliquid">YOGI Eliquid</a>
							</li>
							<li>
								<a href="/catalog/brendy/zenith-e-juice" title="Zenith E-Juice">Zenith E-Juice</a>
							</li>
							<li>
								<a href="/catalog/brendy/zeppy" title="ZEPPY">ZEPPY</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none; display: inline">
						<div id='separator'></div>
					</li>
					<li id="item_1">
						<a href="/catalog/vkusy" title="Вкусы">Вкусы</a>
						<ul>
							<li>
								<a href="/catalog/vkusy/desert" title="Десерт">Десерт</a>
							</li>
							<li>
								<a href="/catalog/vkusy/krem-kastard-" title="Карамель,Крем &quot;Кастард&quot; ">Карамель,Крем &quot;Кастард&quot;</a>
							</li>
							<li>
								<a href="/catalog/vkusy/kofe-shokolad" title="Кофе, шоколад">Кофе, шоколад</a>
							</li>
							<li>
								<a href="/catalog/vkusy/mentol-myata-anis" title="Ментол,мята,анис">Ментол,мята,анис</a>
							</li>
							<li>
								<a href="/catalog/vkusy/tabak" title="Табак">Табак</a>
							</li>
							<li>
								<a href="/catalog/vkusy/frukty" title="Фрукты,ягоды">Фрукты,ягоды</a>
							</li>
							<li>
								<a href="/catalog/vkusy/tsitrusovye" title="Цитрусовые">Цитрусовые</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none; display: inline">
						<div id='separator'></div>
					</li>
					<li id="item_2">
						<a href="/catalog/vg-pg" title="VG_PG">VG_PG</a>
						<ul>
							<li>
								<a href="/catalog/vg-pg/50-50" title="50_50">50_50</a>
							</li>
							<li>
								<a href="/catalog/vg-pg/60-40" title="60_40">60_40</a>
							</li>
							<li>
								<a href="/catalog/vg-pg/70-30" title="70_30">70_30</a>
							</li>
							<li>
								<a href="/catalog/vg-pg/80-20" title="80_20">80_20</a>
							</li>
							<li>
								<a href="/catalog/vg-pg/90-10" title="90_10">90_10</a>
							</li>
							<li><a href="#">99_1</a></li>
							<li>
								<a href="/catalog/vg-pg/max-vg" title="MAX VG">MAX VG</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none; display: inline">
						<div id='separator'></div>
					</li>
					<li id="item_3">
						<a href="/catalog/devaysy" title="Девайсы">Девайсы</a>
						<ul>
							<li>
								<a href="/catalog/devaysy/boksmody" title="Боксмоды">Боксмоды</a>
							</li>
							<li>
								<a href="/catalog/devaysy/mekhmody" title="Мехмоды">Мехмоды</a>
							</li>
							<li>
								<a href="/catalog/devaysy/atomayzery" title="Атомайзеры">Атомайзеры</a>
							</li>
							<li>
								<a href="/catalog/devaysy/dripki" title="Дрипки">Дрипки</a>
							</li>
							<li>
								<a href="/catalog/devaysy/driptipy" title="Дриптипы">Дриптипы</a>
							</li>
							<li>
								<a href="/catalog/devaysy/topkepy" title="Топкэпы">Топкэпы</a>
							</li>
							<li>
								<a href="/catalog/devaysy/aksessuary" title="Aксессуары">Aксессуары</a>
							</li>
							<li>
								<a href="/catalog/devaysy/merch" title="Мерч">Мерч</a>
							</li>
						</ul>
					</li>
					<li style="list-style: none; display: inline">
						<div id='separator'></div>
					</li>
					<li id="item_4">
						<a href="/catalog/raskhodniki" title="Расходники">Расходники</a>
						<ul>
							<li>
								<a href="/catalog/raskhodniki/akkumulyatory-i-z-u" title="Аккумуляторы и з/у">Аккумуляторы и з/у</a>
							</li>
							<li>
								<a href="/catalog/raskhodniki/instrumenty" title="Инструменты">Инструменты</a>
							</li>
							<li>
								<a href="/catalog/raskhodniki/ispariteli" title="Испарители">Испарители</a>
							</li>
							<li>
								<a href="/catalog/raskhodniki/provoloka-xlopok" title="Проволока Xлопок">Проволока Xлопок</a>
							</li>
							<li>
								<a href="#" title="Все для самозамеса">Все для самозамеса</a>
	                        </li>
						</ul>
					</li>
					<li style="list-style: none; display: inline">
						<div id='separator'></div>
					</li>
					<li id="item_5">
						<a href="/catalog/setapy" title="СЕТАПЫ">СЕТАПЫ</a>
					</li>
					<li style="list-style: none; display: inline">
						<div id="separator"></div>
					</li>
					<li id="item_6">
						<a href="/catalog/skidki" title="%">%</a>
						<ul>
							<li>
								<a href="/catalog/skidki/crft" title="CRFT">CRFT</a>
							</li>
							<li>
								<a href="/catalog/skidki/cloud-company" title="Cloud Company">Cloud Company</a>
							</li>
							<li>
								<a href="/catalog/skidki/coval-vapes" title="Coval Vapes">Coval Vapes</a>
							</li>
							<li>
								<a href="/catalog/skidki/donut" title="Donut">Donut</a>
							</li>
							<li>
								<a href="/catalog/skidki/kings-crown" title="Kings Crown">Kings Crown</a>
							</li>
							<li>
								<a href="/catalog/skidki/lost-art-liquids" title="Lost Art Liquids">Lost Art Liquids</a>
							</li>
							<li>
								<a href="/catalog/skidki/mad-hatter-juice" title="Mad Hatter juice">Mad Hatter juice</a>
							</li>
							<li>
								<a href="/catalog/skidki/nakedfish" title="Nakedfish">Nakedfish</a>
							</li>
							<li>
								<a href="/catalog/skidki/okami" title="Okami">Okami</a>
							</li>
							<li>
								<a href="/catalog/skidki/suicide-bunny" title="Suicide Bunny">Suicide Bunny</a>
							</li>
							<li>
								<a href="/catalog/skidki/vape-mail" title="Vape Mail">Vape Mail</a>
							</li>
							<li>
								<a href="/catalog/skidki/voop-juice" title="Voop Juice">Voop Juice</a>
							</li>
						</ul>
					</li>

					<!--<li>
						<a href="#" title="Новинки">Новинки</a>
						<ul>
							<li>Новинкa1</li>
							<li>Новинra2</li>
							<li>Новинкa3</li>
						</ul>
					</li>-->
					<!--<li>
					  <a href="#" title="Хит">Хит</a>
						<ul>
							<li>Хит1</li>
							<li>Хит2</li>
							<li>Хит3</li>
						</ul>
					</li>-->
				</ul>

				<a href="/catalog/avid-lyfe-comp-lyfe" id="mob_menu_avid" title="AVID LYFE/COMP LYFE"></a>
				<a class="address" data-target="#address" data-title="VapeHouse МАРОСЕЙКА" data-toggle="modal" id="mob_menu_address">
				<div class="address_block">
					<div class="title">
						VapeHouse МАРОСЕЙКА
					</div><!--<div class="text">ул.Александра Солженицына д.22/2</div>-->
				</div></a>
				<div id="mob_phone_block">
					<div class="title_phone">
						ИНТЕРНЕТ-МАГАЗИН
					</div><a href="callto:+79263084000">+7(926)308-4000</a>
					<div class="title_phone">
						МАРОСЕЙКА
					</div><a href="callto:+79263084994">+7(926)308-4994</a>
				</div>
				<div class="search visible-md visible-lg">
					<form action="/search/" method="get">
						<input name="s" title="Поиск" type="submit" value=""><input autocomplete="off" name="q" type="text" value="">
					</form>
				</div>
			</div>

			<div class="navbar navbar-default navbar-fixed-top hidden-lg">
				<button class="navbar-toggle" data-target=".navmenu" data-toggle="offcanvas" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="/">VAPEHOUSE RUSSIA</a>
				<div id="m_enter">
					<div class="enter" data-target="#enter_form" data-toggle="modal" title="Войти"></div>
				</div>
				<div id="m-basket_clone">
					<a class="order_link" href="/personal/cart/" title="Оформить заказ"></a>
				</div>
			</div>
