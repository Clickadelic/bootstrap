<?php get_header(); ?>
<div class="wrap-content">
	<div class="container-md">
		<div class="row">
			<main class="col-md-9">
				<div class="row">
					<div class="col">
						<h2 class="content-title"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 5v7.5c0 .864.642 1.5 1.357 1.5h9.286c.715 0 1.357-.636 1.357-1.5V5h1v7.5c0 1.345-1.021 2.5-2.357 2.5H3.357C2.021 15 1 13.845 1 12.5V5h1z"/><path fill-rule="evenodd" d="M5.5 7.5A.5.5 0 0 1 6 7h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5zM15 2H1v2h14V2zM1 1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H1z"/></svg><?php _e('Archive', 'bootstrap'); ?></h2>
					</div>
				</div>
				<?php get_template_part('the-loop'); ?>
				<?php custom_pagination_layout(); ?>
			</main>
			<?php manage_right_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>