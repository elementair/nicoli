<?php get_header(); ?>

	<div class="stm-error-page-unit">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php esc_html_e('La página que estás buscando no existe', 'motors'); ?></h2>
					<a href="<?php echo esc_url(home_url('/')); ?>" alt="<?php esc_html_e('Inicio', 'motors'); ?>" class="button"><?php esc_html_e('Página de inicio', 'motors'); ?></a>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
