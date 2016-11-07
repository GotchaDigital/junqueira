			<?php thb_footer_layout(); ?>
			
			
			<?php get_template_part('partial-footer'); ?>
		</div><!-- /#thb-external-wrapper -->

		<a href="#" class="thb-scrollup">Go top</a>
		
		<?php thb_body_end(); ?>

		<?php thb_footer(); ?>
		<?php wp_footer(); ?>

		<script>
	jQuery('#inpNome').click(function(){					
		jQuery(document).keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){	
				if(jQuery('#inpNome').val() == '' || jQuery('#inpEmail').val() == ''){
					alert("Preencha todos os campos");

				}else{
					var nome = jQuery('#inpNome').val();
					var email = jQuery('#inpEmail').val();
					jQuery.ajax({
						type: "POST",
						url: "http://local.junqueira.com/wp-content/themes/blaine/newslet.php",
						data: {nome: nome, email: email},
						success: function(data){
							alert("Cadastrado com sucesso!");
							jQuery('#inpNome').val('');
							jQuery('#inpEmail').val('');
						}						
					});
				}
		}});	
	});
</script>
		
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/alturaconteudo.js"></script>
	</body>
</html>