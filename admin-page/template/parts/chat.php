<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="action-elephant-chat button-img" onclick="actionToggle();">

	<ul>

		<?php if (get_option( 'elephant_chat_whatsapp' ) != ''): ?>
			<li>
				<a href="https://wa.me/+55<?= get_option( 'elephant_chat_whatsapp' ) ?>" target="_blank">
					<i class="<?= get_option( 'elephant_chat_whatsapp_icon' ) ?>fa-brands fa-whatsapp-square"></i>
					<?= get_option( 'elephant_chat_whatsapp_text' ) ?> 
				</a>
			</li>
		<?php endif ?>

		<?php if (get_option( 'elephant_chat_blip_chat' ) != ''): ?>
			<li>
				<a href="javascript:;" onclick="openBlipChat();" id="openBlipChat">
					<i class="<?= get_option( 'elephant_chat_blip_chat_icon' ) ?>"></i>
					<?= get_option( 'elephant_chat_blip_chat_text' ) ?>
				</a>
			</li>
		<?php endif ?>

		<?php if (get_option( 'elephant_chat_contato' ) != ''): ?>
			<li>
				<a href="<?= get_option( 'elephant_chat_contato' ); ?>">
					<i class="<?= get_option( 'elephant_chat_contato_icon' ) ?>"></i>
					<?= get_option( 'elephant_chat_contato_text' ) ?>
				</a>
			</li>
		<?php endif ?>

		<?php if (get_option( 'elephant_chat_phone' ) != ''): ?>
			<li>
				<a href="tel:<?= get_option( 'elephant_chat_phone' ); ?>">
					<i class="<?= get_option( 'elephant_chat_phone_icon' ) ?>"></i>
					<?= get_option( 'elephant_chat_phone_text' ) ?>
				</a>
			</li>
		<?php endif ?>

		<?php if (get_option( 'elephant_chat_link' ) != ''): ?>
			<li>
				<a href="<?= get_option( 'elephant_chat_link' ); ?>">
					<i class="<?= get_option( 'elephant_chat_link_icon' ) ?>"></i>
					<?= get_option( 'elephant_chat_link_text' ) ?>
				</a>
			</li>
		<?php endif ?>
		
	</ul>
</div>

<div class="msg-elephant-chat" id="alert" onclick="actionToggle();">
	<span><?= get_option( 'elephant_chat_mensagem' ) ?></span>
</div>


<script src="https://unpkg.com/blip-chat-widget@1.9.1/dist/blip-chat.js" type="text/javascript"></script>
<script type="text/javascript">
	var openBlipChat;
	
	window.onload = function () {
		const appkey = '<?= get_option( 'elephant_chat_blip_chat' ); ?>';

		var client = new BlipChat()
		.withAppKey(appkey)
		.withEventHandler(BlipChat.LOAD_EVENT, function(){
			var iframe = document.getElementById("blip-chat-iframe");
			iframe.contentWindow.postMessage({ code: "ShowCloseButton", showCloseButton: true }, iframe.src);
		});

		client.build();

		openBlipChat = function() {
			client.widget._openChat();
		}
	}
	function actionToggle(){
		var action = document.querySelector('.action-elephant-chat');
		action.classList.toggle('active');
	}

	function showdiv() {
		document.getElementById("alert").style.visibility="visible";
	}
	showdiv();

	function hidediv() {
		document.getElementById("alert").style.visibility="hidden";
	}

</script>