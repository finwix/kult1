<div id="footer">
			<div id="f_middle">
				<ul class="list visible-md visible-lg">
					<li>
						<a data-target="#sale_system" data-toggle="modal" href="#" title="Система скидок"><span class="sale_system hover-shadow"></span>Система скидок</a>
					</li>
					<li>
						<a href="/news/" title="Новости"><span class="news hover-shadow"></span>Гарантия на товар</a>
					</li>
					<li>
						<a data-target="#delivery" data-toggle="modal" title="Доставка и оплата"><span class="delivery hover-shadow"></span>Доставка и оплата</a>
					</li>
					<li>
						<a href="mailto:sale@vapehouse.ru" title="Написать"><span class="email hover-shadow"></span>sale@vapehouse.ru</a>
					</li>
					<li>
						<a data-target="#pay_info" data-toggle="modal" title="Безопасность онлайн"><span class="opt hover-shadow"></span>Безопасность онлайн</a>
					</li>
					<li>
						<a href="callto:+79263084000" title="Набрать"><span class="phone hover-shadow"></span>+7(926)308-4000</a>
					</li>
				</ul>
				<div class="bottle">
					<ul class="list hidden-md hidden-lg">
						<li>
							<a href="mailto:sale@vapehouse.ru" title="Написать"><span class="email hover-shadow"></span>sale@vapehouse.ru</a>
						</li>
					</ul>
					<div class="vk buzz" title="Мы в вконтакте">
						<a href="https://vk.com/vapehouserussia" target="_blank"></a>
					</div>
					<div class="fb buzz" title="Мы на фейсбуке">
						<a href="https://www.facebook.com/Vapehouse-Russia-1541337272773934/" target="_blank"></a>
					</div>
					<div class="inst buzz" title="Мы в инстаграме">
						<a href="https://instagram.com/vapehouse.ru/" target="_blank"></a>
					</div>
				</div>
				<div class="pay_subscribe">
					<ul class="list hidden-md hidden-lg">
						<li>
							<a href="callto:+79263084000" title="Набрать"><span class="phone hover-shadow"></span>+7(926)308-4000</a>
						</li>
					</ul>
					<div class="subscr" id="subscribe-form">
						<p>Подписаться на акции и скидки:</p><!--'start_frame_cache_subscribe-form'-->
						<form action="/personal/subscribe/index.php">
							<label for="sf_RUB_ID_1" style="display: none;"><input checked id="sf_RUB_ID_1" name="sf_RUB_ID[]" type="checkbox" value="1"> Новости</label> <label for="sf_RUB_ID_2" style="display: none;"><input checked id="sf_RUB_ID_2" name="sf_RUB_ID[]" type="checkbox" value="2"> Акции</label> <label for="sf_RUB_ID_3" style="display: none;"><input checked id="sf_RUB_ID_3" name="sf_RUB_ID[]" type="checkbox" value="3"> Новинки</label> <input name="sf_EMAIL" placeholder="ваш e-mail" title="Введите ваш e-mail" type="text" value=""> <input class="wobble-horizontal" name="OK" type="submit" value="">
						</form><!--'end_frame_cache_subscribe-form'-->
					</div>
					<div class="pay_system visible-md visible-lg">
						<p>Принимаем к оплате:</p>
						<div class="mastercard"></div>
						<div class="maestro"></div>
						<div class="paypal"></div>
						<div class="visa"></div>
					</div>
				</div>
				<div class="copyright visible-md visible-lg">
					Copyright © 2017 VAPEHOUSE.RU Онлайн - магазин оригинальных девайсов и жидкостей со всего мира.<br>
					ООО "ИНВЕСТ-СТУДИЯ" ОГРН 1147746957158 &nbsp;ИНН 7719427570<br>
					г. Москва, ул. 5-я Парковая, д. 64/4 (юридический адрес).<br>
				</div>
			</div>
		</div>
		<!--<div class="modal fade" id="enter_form" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>ВХОД/РЕГИСТРАЦИЯ</h4>
					</div>
					<div class="modal-body">
						<script type="text/javascript">
						$(document).on('submit', '#enter_form', function(){
						   var $form = $(this);
						   $.post($form.attr('action'), $form.serialize(), function(data){
						       $('input[name=USER_LOGIN], input[name=USER_PASSWORD]').removeClass('err');
						       if(data.type == 'error'){
						           if(data.message == 'email password'){
						               $('input[name=USER_LOGIN], input[name=USER_PASSWORD]').addClass('err');
						           }else if(data.message == 'email'){
						               $('input[name=USER_LOGIN]').addClass('err');
						           }else if(data.message == 'password'){
						               $('input[name=USER_PASSWORD]').addClass('err');
						           }else{
						               $('.status').html(data.message);
						           }
						       }else{
						           window.location = window.location;
						       }
						   }, 'json');
						return false;
						});
						</script>
						<div class="bx-system-auth-form">
							<div class="subtitle">
								Зарегистрированный покупатель
							</div>
							<form action="/?login=yes" id="enter_form" method="post" name="system_auth_formSO5ozY" target="_top">
								<input name="backurl" type="hidden" value="/"> <input name="ajax_key" type="hidden" value="66701f3790298ab5ba27f0d1c337d48a"> <input name="AUTH_FORM" type="hidden" value="Y"> <input name="TYPE" type="hidden" value="AUTH">
								<table cellspacing="10" class="table_input">
									<tr class="field">
										<td align="right"><span>E-mail</span></td>
										<td><input maxlength="50" name="USER_LOGIN" size="17" type="text" value=""></td>
									</tr>
									<tr class="field">
										<td align="right"><span>Пароль</span></td>
										<td><input autocomplete="off" maxlength="50" name="USER_PASSWORD" size="17" type="password"></td>
									</tr>
									<tr>
										<td colspan="2">
											<a href="/auth/?forgot_password=yes">Забыли пароль?</a>
										</td>
									</tr>
								</table><br>
								<div class="status"></div><br>
								<input class="round-corners" name="Login" type="submit" value="ВОЙТИ"><br>
								<br>
								<br>
								<div class="subtitle">
									Новый покупатель
								</div>
								<div class="text">
									Создание учетной записи поможет делать следующие покупки быстре (не надо будет снова вводить адрес и контактную информацию), видеть состояние заказа, а также видеть заказы, сделанные ранее. Вы также сможете накапливать при покупках призовые баллы (на них тоже можно что-то купить), а постоянным покупателям мы предлагаем систему скидок.
								</div><br>
								<br>
								<button class="reg_btn round-corners" data-dismiss="modal" data-target="#reg_form" data-toggle="modal" type="button">РЕГИСТРАЦИЯ</button><br>
								<br>
	<br>
	<div class="bx-auth-lbl">
	    <div class="subtitle">Вход через социальные сети</div>
	    <div class="auth_soc push" id="ok"></div>
	    <div class="auth_soc push" id="vk"></div>
	    <div class="auth_soc push" id="fb"></div>
	    <div class="auth_soc push" id="inst"></div>
	    <div class="bx-auth-serv-icons">
	</div>
	</div>
							</form>
							<div style="display:none">
								<div class="bx-auth-float" id="bx_auth_float">
									<div class="bx-auth">
										<form action="/?login=yes" id="bx_auth_servicesform" method="post" name="bx_auth_servicesform" target="_top">
											<div class="bx-auth-title">
												Войти как пользователь
											</div>
											<div class="bx-auth-note">
												Вы можете войти на сайт, если вы зарегистрированы на одном из этих сервисов:
											</div>
											<div class="bx-auth-services"></div>
											<div class="bx-auth-line"></div>
											<div class="bx-auth-service-form" id="bx_auth_servform" style="display:none"></div><input name="auth_service_id" type="hidden" value="">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="reg_form" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>ВХОД/РЕГИСТРАЦИЯ</h4>
					</div>
					<div class="modal-body">
						<div class="bx-auth-reg">
							<form action="/" enctype="multipart/form-data" id="regform" method="post" name="regform">
								<input name="ajax_key" type="hidden" value="3f686fb87ab0996abb786a0074ed92a5">
								<div class="subtitle">
									Регистрация
								</div>
								<table cellspacing="10" class="table_input">
									<tr class="field">
										<td align="right"><span>Имя:</span></td>
										<td><input class="" name="REGISTER[NAME]" size="30" type="text" value=""><label class="error_field" id="error_NAME">Заполните поле</label></td>
									</tr>
									<tr class="field">
										<td align="right"><span>E-mail:</span></td>
										<td><input class="" name="REGISTER[EMAIL]" size="30" type="text" value=""><label class="error_field" id="error_EMAIL">Заполните поле</label></td>
									</tr>
									<tr class="field">
										<td align="right"><span>Мобильный:</span></td>
										<td><input class="" id="reg_phone" name="REGISTER[PERSONAL_MOBILE]" placeholder="_(___)___-__-__" size="30" type="text" value=""><label class="error_field" id="error_PERSONAL_MOBILE">Заполните поле</label></td>
									</tr>
									<tr class="field">
										<td align="right"><br>
										<br>
										<span>Пароль:</span></td>
										<td><br>
										<br>
										<input autocomplete="off" class="bx-auth-input" name="REGISTER[PASSWORD]" size="30" type="password" value=""><label class="error_field" id="error_PASSWORD">Заполните поле</label></td>
									</tr>
									<tr class="field">
										<td align="right"><span>Подтверждение пароля:</span></td>
										<td><input autocomplete="off" name="REGISTER[CONFIRM_PASSWORD]" size="30" type="password" value=""><label class="error_field" id="error_CONFIRM_PASSWORD">Заполните поле</label></td>
									</tr>
								</table>
								<div class="status"></div><br>
								<p class="text">Пароль должен быть не менее 6 символов длиной.</p><br>
								<input class="round-corners" name="register_submit_button" type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
							</form>
						</div>
						<script type="text/javascript">
						$(document).on('submit', 'form#regform', function(){
						var $form = $(this);
						$.post($form.attr('action'), $form.serialize(), function(data){
						   $('#regform input[name*=REGISTER]').removeClass('err');
						   $('#regform .error_field').animate({opacity: 0}, 300);
						   console.log(data);
						   if(data.type == 'ok'){
						       document.location.href = '/personal/';
						//          location.reload();
						//          window.location = window.location;
						//          location.href=location.href;
						   }else{
						//          if(data.msg.0){
						           $('#regform .status').html(data.msg.other);
						//              $('#regform input[name=captcha_sid]').val(data.captcha);
						//              $('#regform #captcha_img').attr('src', 'http://vapehouse.ru/bitrix/tools/captcha.php?captcha_sid='+data.captcha);
						//          }else{
						           var arr = data.msg;
						           for(var i = 0;arr.length >= i; ++i){
						//                  console.log(arr[i]);
						               $('#regform input[name*='+arr[i]+']').addClass('err');
						               $('#regform #error_'+arr[i]).animate({opacity: 1}, 300);
						           }
						//              arr.foreach(function(item, i, arr){
						//                  $('#regform input[name*='+item+']').addClass('err');
						//                  $('#regform #error_'+item).animate({opacity: 1}, 300);
						               /*if(item == 'other'){
						//                  if(data.captcha){
						//                      $('#regform input[name=captcha_sid]').val(data.captcha);
						//                      $('#regform #captcha_img').attr('src', 'http://vapehouse.ru/bitrix/tools/captcha.php?captcha_sid='+data.captcha);
						//                      $('#regform input[name=captcha_word]').addClass('err');
						//                      $('#regform #error_captcha').animate({opacity: 1}, 300);
						//                  }else if(data.error){
						//                      $('#regform input[name*='+data.error+']').addClass('err');
						//                      $('#regform #error_'+data.error).animate({opacity: 1}, 300)
						//                  }
						                   $('#regform #status').html(data.msg);
						               }else{
						                   $('#regform input[name*='+item+']').addClass('err');
						                   $('#regform #error_'+item).animate({opacity: 1}, 300)
						               }*/
						//              });
						//          }
						   }
						}, 'json');
						return false;
						});
						</script>
					</div>
				</div>
			</div>
		</div>-->
		<div class="modal fade" id="delivery" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>ДОСТАВКА И ОПЛАТА</h4>
					</div>
					<div class="modal-body">
						<p><b></b></p>
						<p style="text-align: center;"><b>Самовывоз</b></p><b></b>
						<p style="text-align: center;"><b>Мы находимся по адресу:&nbsp;</b></p><b></b>
						<p style="text-align: center;"><b>г. Москва, метро Китай-Город, ул. Маросейка, д. 8 за кафе "Брусника"</b></p><b></b>
						<p style="text-align: center;"><b>Режим работы:</b></p><b></b>
						<p style="text-align: center;"><b>ПН - ПТ с 11:00 до 22:00</b></p><b></b>
						<p style="text-align: center;"><b>СБ - ВС с 12:00 до 22:00</b></p><b></b>
						<p style="text-align: center;"><b>Телефон: +7(926)308-4994</b></p><b></b>
						<p style="text-align: center;"><b><img alt="maroseika.jpg" height="284" src="http://vapehouse.ru/upload/medialibrary/8aa/8aa50a40912481591aacd4bc2e847722.jpg" title="maroseika.jpg" width="922"><br></b></p>
						<p style="text-align: center; display: inline !important;"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; В случае самовывоза оформленный заказ находится в резерве ровно сутки с момента оформления.&nbsp;</b></p><b></b>
						<p style="text-align: center;"><b></b></p>
						<p style="text-align: center;"><b></b></p>
						<p style="text-align: center;"><b>Если по истечению этого времени заказ Вы не забрали, то он аннулируется.</b></p><b></b>
						<p style="text-align: center;"><b>Доставка</b></p><b></b>
						<ul>
							<li><b>Доставка по Москве</b> в пределах <b>МКАД</b> составляет <b>350</b> рублей и осуществляется нашей курьерской службой. Заказы доставляются на следующий день после оформления.&nbsp;Доставка за <b>МКАД</b> обговаривается отдельно.<br></li>
							<li>В любую точку РФ&nbsp;<b>Почтой России</b> - &nbsp;от&nbsp;<b>350</b>&nbsp;рублей (все заказы отправляются <b>1- м классом</b>).<br></li>
							<li><b>Транспортная компания СДЕК (пункты выдачи заказов и курьерская). Отгрузка заказов в ТК СДЕК происходит ежедневно с понедельника по пятницу (пятница до 12:00 дня/ суббота и воскресенье - выходной день в ТК СДЕК). В случае выбора способа "СДЕК Самовывоз" (самовывоз из пункта выдачи заказов ТК СДЕК) срок поступления заказа в пункт занимает до 2-х рабочих дней (для Москвы и МО). Информируем Вас, что в случае отгрузки заказа в пятницу это не значит, что заказ поступит или Вам его доставит ТК СДЕК в течение указанного срока. По опыту, пятничные заказы обрабатываются ТК СДЕК с понедельника следующей недели. Каждому клиенту приходит смс - оповещение при поступлении в пункт выдачи.&nbsp;</b>Точную стоимость доставки, до своего города или пункта самовывоза в Вашем городе, Вы найдёте на странице оформления заказа. Интегрированная система автоматически рассчитает наиболее удобный или бюджетный вариант доставки.&nbsp;</li>
						</ul>
						<p style="text-align: center;"><br></p><b></b>
						<p style="text-align: center;"><b>Возврат товаров</b></p><b></b>
						<p>Постановление Правительства РФ от 19 января 1998 г. В случае обнаружения недостатков товара, свойства которого не позволяют устранить их (продовольственные товары, парфюмерно-косметические изделия, товары бытовой химии и другие товары), покупатель вправе по своему выбору потребовать замены такого товара товаром надлежащего качества либо соразмерного уменьшения покупной цены. Вместо предъявления указанных требований покупатель вправе отказаться от приобретенного товара и потребовать возврата уплаченной за товар денежной суммы. При этом покупатель по требованию продавца и за его счет должен возвратить полученный товар ненадлежащего качества.</p>
						<p style="text-align: center;"><b>Оплата</b></p>
						<p style="text-align: center;"><b>Оплата наличными курьеру</b></p>
						<p style="text-align: left;">Уважаемые клиенты!&nbsp;<b>Оплата наличными возможна только при условии доставки по Москве нашей курьерской службой.&nbsp;</b>В остальных случаях (Почта России, СДЕК) оплата <b>только онлайн на сайте</b>.</p>
						<p style="text-align: center;"><b>&nbsp;Оплата банковской картой онлайн</b><br></p>
						<p>Наш сайт подключен к интернет-эквайрингу, и Вы можете оплатить Товар банковской картой Visa или Mastercard. После подтверждения выбранного Товара откроется защищенное окно с платежной страницей процессингового центра CloudPayments, где Вам необходимо ввести данные Вашей банковской карты. Для дополнительной аутентификации держателя карты используется протокол 3D Secure. Если Ваш Банк поддерживает данную технологию, Вы будете перенаправлены на его сервер для дополнительной идентификации. Информацию о правилах и методах дополнительной идентификации уточняйте в Банке, выдавшем Вам банковскую карту.</p>
						<p style="text-align: center;"><br></p>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="sale_system" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>СИСТЕМА ЛОЯЛЬНОСТИ</h4>
					</div>
					<div class="modal-body">
						<p>В&nbsp;<span style="color: #ff0000;"><b>VapeHouse&nbsp;Club</b>&nbsp;</span>действует&nbsp;накопительная&nbsp;система&nbsp;скидок&nbsp;<b>3%</b>,<b>5%</b>&nbsp;<b>7%</b>,<b>10%</b><br>
						При покупке Вы получаете нашу дисконтную карту с уже &nbsp;имеющейся на ней скидкой <b>3%</b>.&nbsp;<br>
						Далее карта становится накопительной и привязывается к Вашему аккаунту у нас на сайте.<br>
						Регистрация обязательна.<br>
						В личном кабинете в разделе <b>VapeHouse Club</b> необходимо ввести номер карты полностью<br>
						и связаться с нами по телефону для ее активации.&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="pay_info" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>Безопасность</h4>
					</div>
					<div class="modal-body">
						<p><b>Платежи. Оплата банковской картой онлайн</b><br></p>
						<p>Наш сайт подключен к интернет-эквайрингу, и Вы можете оплатить Товар банковской картой Visa или Mastercard. После подтверждения выбранного Товара откроется защищенное окно с платежной страницей процессингового центра CloudPayments, где Вам необходимо ввести данные Вашей банковской карты. Для дополнительной аутентификации держателя карты используется протокол 3D Secure. Если Ваш Банк поддерживает данную технологию, Вы будете перенаправлены на его сервер для дополнительной идентификации. Информацию о правилах и методах дополнительной идентификации уточняйте в Банке, выдавшем Вам банковскую карту.</p><br>
						<br>
						<b>Гарантии безопасности</b><br>
						<p>Процессинговый центр CloudPayments защищает и обрабатывает данные Вашей банковской карты по стандарту безопасности PCI DSS 3.0. Передача информации в платежный шлюз происходит с применением технологии шифрования SSL. Дальнейшая передача информации происходит по закрытым банковским сетям, имеющим наивысший уровень надежности. CloudPayments не передает данные Вашей карты нам и иным третьим лицам. Для дополнительной аутентификации держателя карты используется протокол 3D Secure.</p><br>
						<p>В случае, если у Вас есть вопросы по совершенному платежу, Вы можете обратиться в службу поддержки клиентов по электронной почте&nbsp;<a href="mailto:support@cloudpayments.ru">support@cloudpayments.ru</a>.</p><br>
						<br>
						<b>Безопасность онлайн платежей</b><br>
						<p>Предоставляемая Вами персональная информация (имя, адрес, телефон, e-mail, номер кредитной карты) является конфиденциальной и не подлежит разглашению. Данные Вашей кредитной карты передаются только в зашифрованном виде и не сохраняются на нашем Web-сервере.</p><br>
						<p>Безопасность обработки Интернет-платежей гарантирует ООО «КлаудПэйментс». Все операции с платежными картами происходят в соответствии с требованиями VISA International, MasterCard и других платежных систем. При передаче информации используется специальные технологии безопасности карточных онлайн-платежей, обработка данных ведется на безопасном высокотехнологичном сервере процессинговой компании.</p><br>
						<img alt="CloudPayments" src="http://cloudpayments.ru/images/docs/logo-small.png">&nbsp;&nbsp;&nbsp;<img alt="Verifyed By Visa" src="http://cloudpayments.ru/images/docs/vbv.png">&nbsp;&nbsp;&nbsp;<img alt="MasterCard SecureCode" src="http://cloudpayments.ru/images/docs/mastercard-securecode.png"><br>
						<br>
						<br>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="address" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close glyphicon glyphicon-remove" data-dismiss="modal" type="button"></button>
						<h4 class="modal-title"><span></span>VapeHouse Маросейка</h4>
					</div>
					<div class="modal-body">
						<!--<script type="text/javascript">
						                       ymaps.ready(init);
						                       var vapeMap,
						                           myPlacemark;
						                   
						                       function init(){
						                           vapeMap = new ymaps.Map ("vapeMap", {
						                               center: [55.757592, 37.636437],
						                               zoom: 16
						                           });
						                           vapeMap.controls.add('zoomControl');
						                           var trafficControl = new ymaps.control.TrafficControl();
						                           vapeMap.controls.add(trafficControl);
						                           vapeMap.behaviors.enable('scrollZoom');
						                           
						                           
						                           BalloonContentLayout = ymaps.templateLayoutFactory.createClass(
						                               '<h3 style="text-align: center">$[properties.name]<\/h3>' +
						                               '<p style="padding: 10px">$[properties.description]<\/p>'
						                           );
						                           
						                           var placemark = new ymaps.Placemark(
						                           [55.757592, 37.636437],
						                           {
						                               name: 'VapeHouse',
						                               description: 'м. Китай-Город, ул. Маросейка д.8',
						                           },
						                           {
						                               balloonContentLayout: BalloonContentLayout,
						                               iconImageHref: 'http://vapehouse.ru/bitrix/templates/vh/img/map_logo.png',
						                               iconImageSize: [50, 50],
						                               iconImageOffset: [-10, -10]
						                           });
						                           vapeMap.geoObjects.add(placemark);
						                       }
						</script>-->
						<div id="vapeMap" style="min-width: 450px; width: 600px; max-width: 800px; height: 400px"></div>
					</div>
				</div>
			</div>
		</div><!--<div class="modal fade" id="order" role="dialog"></div>
	        <div class="modal fade" id="detail" role="dialog"></div>-->
		<!--<div id="shadow" onclick="hide_popup();"></div>-->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<!-- Include all compiled plugins (below), or include individual files as needed -->

	</body>
</html>