	<footer>
		<br><br>
		<p class="text-center">
			&copy; Todos los derechos reservados <?=date('Y')?>
		</p>
	</footer>
	<script src="<?=$assets_js?>jquery-3.1.1.js"></script>
	<script src="<?=$assets_js?>bootstrap.min.js"></script>
	<script src="<?=$assets_js?>jquery.form-validator.min.js"></script>
	<script src="<?=$assets_js?>jquery.form-validator.es.js"></script>
	<script src="<?=$assets_js?>material.min.js"></script>
	<script src="<?=$assets_js?>material-kit.js"></script>
	<script>
		$(document).ready(function() {
		/*---------------------------------*/
			$('.btn-upload').click(function(){
				$('#upload').click();
			});
			/*---------------------------------*/
			$.validate({
			form: '#frm',
			language: es
			});
			$('.btn-delete').click(function(event) {
				if (confirm('Realmente desea eliminar')){
					$id = $(this).attr('data-delete');
					window.location.replace('delete.php?id='+$id);
			}
		});
			$('.btn-shop').click(function(event) {
				if (confirm('¿Desea comprar el Articulo?')){
					$id = $(this).attr('data-action');
					window.location.replace('client/shop.php?id='+$id);
			}
		});
	});
	</script>
	</body>
