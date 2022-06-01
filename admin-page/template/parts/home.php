<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
	<div class="container bg-white shadow-lg rounded-3 p-4">
		<form method="POST" taxonomy="location" action="options.php">
			<div class="container">
				
				<div class="row">

					<div class="col-6 m-1 p-4 rounded">
						<?php settings_fields( 'elephant_chat_setting' ); ?>
						<?php do_settings_sections( 'elephant_chat_setting' ); ?>
					</div>

				</div>
				<div class="row">
					<button class="col-2 btn btn-primary my-2 shadow-lg">Enviar</button>
				</div>

			</div>
		</form>
	</div>

</div>